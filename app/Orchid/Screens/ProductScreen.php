<?php

namespace App\Orchid\Screens;

use Illuminate\Support\Facades\Request;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layout;
use App\Models\Product;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Actions\Button;

class ProductScreen extends Screen
{
    public $name = 'Products';

    public $description = 'Product management';

    public function query(Product $product): array
    {
        return [
            'product' => $product
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make('Back')->route('platform.main'),
            Button::make('Save')->method('save')->icon('check'),
        ];
    }

    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('product.name')
                    ->title('Name')
                    ->placeholder('Enter name')
                    ->help('Product name'),
                Input::make('product.description')
                    ->title('Description')
                    ->placeholder('Enter description')
                    ->help('Product description'),
            ])
        ];
    }

    public function save(Product $product, Request $request)
    {
        $product->fill($request->get('product'))->save();

        Alert::info('You have successfully created a product.');

        return redirect()->route('platform.main');
    }
}
