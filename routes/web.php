
<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use function PHPSTORM_META\elementType;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello1', function () {
//     return view('hi.hello');
// });

// Route:: get('/hello2',function(){
//     return "<h1 style='color:black;text-align:center;'>Hello, Đạt</h1>";
// });

// Route::get('/giaiptb1', function () {
//     return view('giaiptb1.giaiptb1');
// });
// Route::post('giaiptb1', function(Request $req){
//     $a = $req->hsa;
//     $b = $req->hsb;

//     $a = floatval($a);
//     $b = floatval($b);

//     if($a == 0) {
//         if($b == 0)
//             $ketqua = "Phương trình vô số nghiệm";
//         else
//             $ketqua = "Phương trình vô nghiệm";
//     } else {
//         $ketqua = "Phương trình có nghiệm x=" . (-$b / $a);
//     }
//     return view('giaiptb1.giaiptb1', compact('ketqua','a', 'b'));
// })->name('postgiaiptb1');


// Route::match(['get', 'post'], 'random', function(Request $req){
//     if ($req->isMethod('post')) {
//         $from = $req->input('from');
//         $to = $req->input('to');

//         $from = floatval($from);
//         $to = floatval($to);

//         if($from >= $to) {
//             return back()->with('error', 'Số "từ" phải nhỏ hơn số "đến".');
//         }

//         $result = rand($from, $to);

//         return back()->with('result', "Số ngẫu nhiên từ $from đến $to: $result");
//     }

//     return view('giaiptb1.random');
// })->name('random');

Route ::resource('cars',CarController::class);

// Route::get('cars', [CarController::class, 'index'])->name('cars.index');
// Route::post('cars', [CarController::class, 'store'])->name('cars.store');
// Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
// Route::get('cars/{car}',[CarController::class, 'show'])->name('cars.show');
// Route::put('cars/{car}',[CarController::class, 'update'])->name('cars.uppdate');
// Route::delete('cars/{car}',[CarController::class, 'destroy'])->name('cars.destroy');
// Route::get('cars/{car}/edit',[CarController::class, 'edit'])->name('cars.edit');

// Route::get('/cars/create', 'CarController@create')->name('cars.create');
