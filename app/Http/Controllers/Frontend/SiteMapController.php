<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;
class SiteMapController extends Controller
{
    public function index()
    {
        // Get all web routes
        $routes = Route::getRoutes()->getRoutesByMethod()['GET'];
        
        $urls = [];
        $now = Carbon::now()->toAtomString();
        
        // Exclude routes that shouldn't be in sitemap
        $excludedRoutes = [
            'debugbar.', 
            'ignition.', 
            'sitemap',
            'contact-us.store',
            'each-contact.store'
        ];
        
        foreach ($routes as $route) {
            $routeName = $route->getName();
            
            // Skip routes without name or excluded routes
            if (!$routeName || $this->shouldExcludeRoute($routeName, $excludedRoutes)) {
                continue;
            }
            
            // Skip routes that require parameters (you can customize this)
            if (str_contains($route->uri, '{')) {
                continue;
            }
            
            $urls[] = [
                'loc' => url($route->uri),
                'lastmod' => $now,
                'changefreq' => 'weekly',
                'priority' => $this->getPriority($routeName),
            ];
        }
        
        return response()
            ->view('frontend.pages.sitemap.index', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }
    
    protected function shouldExcludeRoute($routeName, $excludedRoutes)
    {
        foreach ($excludedRoutes as $excluded) {
            if (str_starts_with($routeName, $excluded)) {
                return true;
            }
        }
        return false;
    }
    
    protected function getPriority($routeName)
    {
        // Assign priorities based on route importance
        if ($routeName === 'home') return '1.0';
        if (str_starts_with($routeName, 'financial-services')) return '0.9';
        if (str_starts_with($routeName, 'corporate-advisory')) return '0.9';
        if (str_starts_with($routeName, 'mutual-funds')) return '0.8';
        if (str_starts_with($routeName, 'calculators')) return '0.7';
        if (str_starts_with($routeName, 'other-services')) return '0.7';
        return '0.5';
    }
}
