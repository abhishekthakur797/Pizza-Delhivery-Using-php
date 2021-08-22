<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use App\OrderItems;

class OrderController extends Controller
{
    //
	public function placeOrder(Request $request) {
		
		$user = User::where('email', $request->input('email'))->firstOrFail();
		
		$order = $user->orders()->create($request->all());
		
		foreach ($request->orderItems as $key => $orderItem)
			//dd($orderItem['id']);
			$order->items()->create(['product_id' => $orderItem['id'], 'quantity' => $orderItem['quantity']]);


		return response()->json([
			"success" => [
				'message' => "Order placed successfully!",
				'order' => Order::with(array('items' => function($query) { return $query->with('product'); }))->findOrFail($order->id)
			]
		], 201);

	}

	public function getOrder($orderId) {
		$order = Order::with(array('items' => function($query) { return $query->with('product'); }))->findOrFail($orderId);

		return response()->json([
			"success" => [
				'message' => "Success",
				'order' => $order
			]
		]);
	}
}
