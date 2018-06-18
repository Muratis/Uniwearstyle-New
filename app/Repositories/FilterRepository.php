<?php
namespace App\Repositories;

use  Illuminate\Support\Facades\DB;
use App\Models\Sizes;
use App\Repositories\BomberRepository;
use App\Repositories\TshirtRepository;
use App\Repositories\HoodieRepository;
use App\Repositories\PoloRepository;
use App\Repositories\SweatshirtRepository;

class FilterRepository extends BaseRepository
{
	protected $tshirt;
	protected $polo;
	protected $hoodie;
	protected $sweatshirt;
	protected $bomber;

//	public function __construct()
//	{
//		$this->size = new Sizes();
//		$this->tshirt = new TshirtRepository();
//		$this->polo = new PoloRepository();
//		$this->hoodie = new HoodieRepository();
//		$this->bomber = new BomberRepository();
//		$this->sweatshirt = new SweatshirtRepository();
//	}
//
//	public function  allCatalog($size = false)
//	{
//		$cataloge = DB::table('tshirts')
//			->union(DB::table('poloes'))
//			->union(DB::table('bombers'))
//			->union(DB::table('sweatshirts'))
//			->union(DB::table('hoodies'))->get();
//
//		return $cataloge;
//	}
//
//
//
//	public function getSizeFilter()
//	{
//		$sizes = $this->size->select('size_id', 'name')->latest()->get();
//		return $sizes;
//	}


}
