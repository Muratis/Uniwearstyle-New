<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\Models\Sizes;
use  App\Models\Cataloge;

class CatalogeRepository
{
	public function __construct()
	{
		$this->size = new Sizes();
		$this->cataloge = new Cataloge();
	}

	public function allCatalog($size = false)
	{

		$tshirts = $this->cataloge
			->select('cataloge.id', 'clothes_type', 'cataloge.name', 'description', 'image', 'priceTo10','priceTo20', 'priceTo50', 'stock', 'gender');

		if ((int)$size) {
			$tshirts = $tshirts->join('sizes_cataloge', 'cataloge.id','=', 'sizes_cataloge.id')
				->where('sizes_cataloge.size_id', '=', $size);
		};


		$tshirts = $tshirts->latest()->simplePaginate(12);

		return $tshirts;
	}

	public function oneItemCataloge($data)
	{

		$item = $this->cataloge
			->select('id', 'clothes_type', 'name', 'description', 'image', 'priceTo10', 'priceTo20', 'priceTo50', 'stock', 'gender')->with('cataloge_sizes')
			->where('id', '=', $data->id)->first();

		return $item;
	}

	public function oneTypeClothes($size = false, $data)
	{
		$clothes = $this->cataloge
			->select('cataloge.id', 'clothes_type', 'cataloge.name', 'description', 'image', 'priceTo10', 'priceTo20', 'priceTo50', 'stock', 'gender');

		if ((int)$size) {
			$clothes = $clothes->join('sizes_cataloge', 'cataloge.id','=', 'sizes_cataloge.id')
				->where('sizes_cataloge.size_id', '=', $size);
		};


		$clothes = $clothes->where('clothes_type', '=', $data->typeClothes)->latest()->simplePaginate(12);

		return $clothes;
	}
	


	public function getSizeFilter()
	{
		$sizes = $this->size->select('size_id', 'name')->latest()->get();
		return $sizes;
	}


}