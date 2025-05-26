<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'title', 'main_image', 'slug', 'content', 'route_name', 'parent_id', 'order', 
        'is_active', 'meta_title', 'meta_description', 'template', 'show_in_sidebar'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Page::class, 'parent_id')->orderBy('order');
    }

    // Get siblings for sidebar (pages with same parent)
    public function siblings()
    {
        return $this->where('parent_id', $this->parent_id)
                   ->where('is_active', true)
                   ->orderBy('order')
                   ->get();
    }

    // Get sidebar menu items (either children or siblings)
    public function sidebarMenu()
    {
        if ($this->children()->exists()) {
            return $this->children()->where('is_active', true)->get();
        }
        
        if ($this->parent) {
            return $this->parent->children()->where('is_active', true)->get();
        }
        
        return collect(); // Return empty collection if no relations
    }

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($page) {
            $page->slug = $page->createSlug($page->title);
        });
    }
    /*public function sidebarMenuFrontend()
    {
        if ($this->children()->exists()) {
            return $this->children()
                ->where('is_active', true)
                ->where('show_in_sidebar', true)
                ->orderBy('order')
                ->get();
        }
        if ($this->parent) {
            return $this->parent->children()
                ->where('is_active', true)
                ->where('show_in_sidebar', true)
                ->orderBy('order')
                ->get();
        }
        return collect();
    }
    */
    public function sidebarMenuFrontend()
    {
        $result = [
            'pages' => collect(),
            'title' => $this->title
        ];

        // If the page has children, show them
        if ($this->children()->exists()) {
            $result['pages'] = $this->children()
                ->where('is_active', true)
                ->where('show_in_sidebar', true)
                ->orderBy('order')
                ->get();
        }
        // If the page has a parent, show that parent's children
        elseif ($this->parent) {
            $result['pages'] = $this->parent->children()
                ->where('is_active', true)
                ->where('show_in_sidebar', true)
                ->orderBy('order')
                ->get();
            $result['title'] = $this->parent->title;
        }

        return $result;
    }

    private function createSlug($title)
    {
        $slug = Str::slug($title);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}