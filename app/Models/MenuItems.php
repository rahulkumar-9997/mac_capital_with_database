<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuItems extends Model
{
    protected $table = 'menu_items';
    protected $fillable = [
        'menu_id', 'page_id', 'title', 'url', 'route', 'parent_id', 'order', 'is_active'
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuItems::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(MenuItems::class, 'parent_id')->orderBy('order');
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function getUrlAttribute()
    {
        // If route name is defined and exists
        if ($this->route && \Route::has($this->route)) {
            return route($this->route);
        }

        // If the item is linked to a CMS page
        if ($this->page) {
            return route('page.show', $this->page->slug);
        }

        // Fallback: use direct URL or '#'
        return $this->attributes['url'] ?? '#';
    }

    public static function updateOrder(array $orderData)
    {
        foreach ($orderData as $data) {
            self::where('id', $data['id'])->update([
                'order' => $data['order'],
                'parent_id' => $data['parent_id'] ?? null
            ]);
        }
    }
}
