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
        $title = "Les Kits";
        return view('listKits', compact('kits', "title"));
    }
    public function getIndex()
    {
        $popularKits = $this->repositoryProduit->getOrderBy('grade', 'desc')->take(3);
        $newKits = $this->repositoryProduit->getNew(); //->take(3);
        return view('index', compact('popularKits', 'newKits'));
    }
    public function getAllKitbyGrade()
    {
        $kits = $this->repositoryProduit->getOrderBy('grade', 'desc');
        $title = "Les kits les mieux notés";
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyPriceDesc()
    {
        $kits = $this->repositoryProduit->getOrderBy('price', 'desc');
        $title = "Les kits par prix décroissant";
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyPriceAsc()
    {
        $kits = $this->repositoryProduit->getOrderBy('price', 'asc');
        $title = "Les kits par prix Croissant";
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyNameDesc()
    {
        $kits = $this->repositoryProduit->getOrderBy('title', 'desc');
        $title = "Les kits par nom Décroissant";
        return view('listKits', compact('kits', 'title'));
    }
    public function getAllKitbyNameAsc()
    {
        $kits = $this->repositoryProduit->getOrderBy('title', 'asc');
        $title = "Les kits par nom Croissant";
        return view('listKits', compact('kits', 'title'));
    }
}
