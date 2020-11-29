<?php
namespace Xpert\Export;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Maatwebsite\Excel\ExcelServiceProvider;
use Jangid\Export\Http\Controllers\ExportController;


class ExportServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
    }
    public function register(){
    
        $this->app->bind('export',function(){
            return new ExportController;
        });
        $this->app->register('Maatwebsite\Excel\ExcelServiceProvider');
        $this->app->register('Barryvdh\DomPDF\ServiceProvider');
        
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Excel', 'Maatwebsite\Excel\Facades\Excel');
        $loader->alias('PDF', 'Barryvdh\DomPDF\Facade');

    }
}