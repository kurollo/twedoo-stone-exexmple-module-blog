<?php
/**
 * Created by PhpStorm.
 * User: proox
 * Date: 16/09/18
 * Time: 22:46
 */

namespace App\Modules\Blog;

use Artisan;
use StonePath;
use StoneStructure;
use StoneEngine;
use StoneTranslation;
use Route;
use Schema;
use Session;
use Validation;

class Blog extends StoneStructure
{
    /**
     * Configurations constructor.
     */
    public function __construct()
    {
        $this->name = 'Blog';
        $this->nameDisplay = 'Blog Stone';
        $this->description = 'Blog Stone';
        $this->author = 'Houssem Maamria';
        $this->menuTranslate = 'sidebar/sidebar.php';
        $this->typeModule = 'back';
        $this->btnParameters = true;
        $this->btnEnable = true;
        $this->btnReset = true;
        $this->btnUninstall = true;
        $this->btnRemove = true;
        $this->btnRemove = true;
        $this->dropTable = "blog";
        $this->categoryMenu = 'blog_menu';
    }

    /**
     * Void
     */
    public function bootStone() : void
    {
        //
    }

    public function js()
    {

    }

    /**
     * @param $idModule
     * @param $statusModule
     * @return mixed
     */
    public function getParameters($idModule, $statusModule)
    {
        return StoneEngine::displayParameters(
            $idModule,
            $statusModule,
            $this->name,
            $this->btnParameters,
            $this->btnEnable,
            $this->btnReset,
            $this->btnUninstall,
            $this->btnRemove
        );
    }

    /**
     * @return string
     */
    public function parameters($id, $module)
    {
        return view($this->name . "::Parameters.parameters",
            compact(
                'id',
                'module'
            )
        );
    }
}
