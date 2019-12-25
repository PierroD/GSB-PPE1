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
        $title = "Les kits";
        return view('list', compact('kits', 'title'));
    }
}
