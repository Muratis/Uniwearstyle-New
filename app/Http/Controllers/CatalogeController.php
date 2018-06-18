<?php
namespace App\Http\Controllers;

use App\Repositories\CatalogeRepository;
use Illuminate\Http\Request;


class CatalogeController extends Controller
{

	protected $cataloge;

	public function __construct()
	{
		$this->cataloge = new CatalogeRepository();
	}

	public function OneItemCataloge(Request $request)
	{
		$item = $this->cataloge->oneItemCataloge($request);
		return view('/cataloge/one', array('item' => $item));
	}
	
	public function getAllCataloge(Request $request)
	{

		$size = null;
		if ($request->size_id) {
			$size = $request->size_id;
		}
		$allSize = $this->cataloge->getSizeFilter();
		$content = $this->cataloge->allCatalog($size);

		if ($request->ajax()) {
			return view('/cataloge/preview/widget_item', array('content' => $content,  'size' => $allSize));
		} else {
			return view('home.index', array('content' => $content, 'size' => $allSize));
		}
	}

	public function getAlltypeClothes(Request $request)
	{
		$size = null;
		if ($request->size_id) {
			$size = $request->size_id;
		}

		$allSize = $this->cataloge->getSizeFilter();
	if ($request->typeClothes == 'all') {
		$content = $this->cataloge->allCatalog($size);
	} else {
		$content = $this->cataloge->oneTypeClothes($size, $request);
	}
		if ($request->ajax()) {
			return view('/cataloge/preview/widget_item', array('content' => $content, 'size' => $allSize));
		} else {
			return view('/cataloge/cataloge', array('content' => $content,  'size' => $allSize));
		}
	}
	
	
	


}