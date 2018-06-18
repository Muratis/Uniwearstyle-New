<?php
use App\Models\Sizes;
use App\Models\Cataloge_admin\Hoodies;
use SleepingOwl\Admin\Model\ModelConfiguration;
AdminSection::registerModel(Hoodies::class, function (ModelConfiguration $model) {

	$model->setTitle('Худи');
	$model->setAlias('hoodies');
	$model->setCreateTitle('Добавить в каталог');
	$model->onDisplay(function () {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::text('id', 'Номер товара')->setWidth('200px'),
			AdminColumn::text('name', 'название товара')->setWidth('400px'),
			AdminColumn::text('description', 'Описание товара')->setWidth('400px'),
			AdminColumn::image('image', 'Изображение товара')->setWidth('400px'),
			AdminColumn::text('priceTo10', 'Цена 10 шт')->setWidth('200px'),
			AdminColumn::text('priceTo20', 'Цена 20шт')->setWidth('200px'),
			AdminColumn::text('priceTo30', 'Цена 50шт')->setWidth('200px'),
			AdminColumn::text('gender', 'Пол'),
			AdminColumn::lists('cataloge_sizes.name', 'Размеры')->setWidth('100px'),
			AdminColumnEditable::checkbox('stock', 'есть', 'нету')->setLabel('Наличие')->setWidth('100px'),

			AdminColumn::datetime('created_at')->setLabel('Дата')->setFormat('d.m.Y')->setWidth('150px')
		])->paginate(5)->setApply( function ($query) {
			$query->orderBy('id', '0');
			$query->where('clothes_type', '=', 'hoodie');

		});


		return $display;
	});


	$model->onCreateAndEdit(function () {
		$form = AdminForm::panel()->addBody(

			AdminFormElement::text('name', 'Название товара')->required(),
			AdminFormElement::hidden('clothes_type')->setDefaultValue('hoodie'),
			AdminFormElement::number('priceTo10', 'Цена 10шт')->required(),
			AdminFormElement::number('priceTo20', 'Цена 20шт')->required(),
			AdminFormElement::number('priceTo50', 'Цена 50шт')->required(),
			AdminFormElement::textarea('description', 'Описание товара'),
			AdminFormElement::multiselect('cataloge_sizes', 'Выберите размер')->setModelForOptions(new Sizes())->setDisplay('name')->required(),
			AdminFormElement::radio('gender', 'Пол')->setOptions(['male'=>'Чоловічий', 'female'=>'Жіночий', 'unisex'=>'Унісекс'])->required(),
			AdminFormElement::images('image', 'изображение товара')->storeAsComaSeparatedValue()->required()
		);
		return $form;
	});




});