<?php

namespace App\Widgets;
use App\Repositories\ReviewRepository;
use App\Repositories\CartRepository;
use SleepingOwl\Admin\Widgets\Widget;

class DashboardMap extends Widget
{




	/**
	 * Если метод вернет false, блок не будет помещен в шаблон
	 * Данный метод не обязателен
	 *
	 * @return boolean
	 */
	public function active()
	{
		return true;
	}

	/**
	 * При помещении в один блок нескольких виджетов они будут выведены в порядке их позиции
	 * Данный метод не обязателен
	 *
	 * @return integer
	 */
	public function position()
	{
		return 0;
	}

	/**
	 * HTML который необходимо поместить
	 *
	 * @return string
	 */
	public function toHtml()
	{

	}

	/**
	 * Путь до шаблона, в который добавляем
	 *
	 * @return string|array
	 */



	public function template()
	{

	}

	/**
	 * Блок в шаблоне, куда помещаем
	 *
	 * @return string
	 */
	public function block()
	{
		
	}
}