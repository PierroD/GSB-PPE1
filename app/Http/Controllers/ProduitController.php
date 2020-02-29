<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProduitRepositoryInterface;

class ProduitController extends Controller
{
    protected $repositoryProduit;

    /**
     * ProduitController constructor.
     *
     * @param ProduitRepositoryInterface $produit
     */
    public function __construct(ProduitRepositoryInterface $repositoryProduit)
    {
        $this->repositoryProduit = $repositoryProduit;
    }


    public function getKit($id)
    {
        $kit = $this->repositoryProduit->get($id);
        return view('kit', compact('kit'));
    }
    public function getAllKit()
    {
        $kits = $this->repositoryProduit->all();
        $title = \Lang::get('listKits.allKits');
        return view('listKits', compact('kits', "title"));
    }
    public function getIndex()
    {
        $popularKits = $this->repositoryProduit->getOrderBy('grade', 'desc')->take(3);
        $newKits = $this->repositoryProduit->getOrderBy('created_at', 'desc')->take(3);
        return view('index', compact('popularKits', 'newKits'));
    }
    public function getAllKitbyGrade()
    {
        $kits = $this->repositoryProduit->getOrderBy('grade', 'desc');
        $title = \Lang::get('listKits.gradeKits');
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyLastest()
    {
        $kits = $this->repositoryProduit->getOrderBy('created_at', 'desc');
        $title = \Lang::get('listKits.newKits');
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyPriceDesc()
    {
        $kits = $this->repositoryProduit->getOrderBy('price', 'desc');
        $title = \Lang::get('listKits.descPriceKits');
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyPriceAsc()
    {
        $kits = $this->repositoryProduit->getOrderBy('price', 'asc');
        $title = \Lang::get('listKits.ascPriceKits');
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyNameDesc()
    {
        $kits = $this->repositoryProduit->getOrderBy('title', 'desc');
        $title = \Lang::get('listKits.descNameKits');
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyNameAsc()
    {
        $kits = $this->repositoryProduit->getOrderBy('title', 'asc');
        $title = \Lang::get('listKits.ascNameKits');
        return view('listKits', compact('kits', 'title'));
    }
}
