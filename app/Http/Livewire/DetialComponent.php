<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Cart;
class DetialComponent extends Component
{
    public $slug;
    Public function mount($slug){

        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $popular_products=Product::inRandomOrder()->limit(4)->get();
        $related_products=Product::where('category_id',$product->category_id)->inRandomOrder()->limit(15)->get();
        return view('livewire.detial-component',['deail'=>$product,'popular'=> $popular_products,'related'=>$related_products])->layout('layouts.base');
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('cart.page');
    }

}
