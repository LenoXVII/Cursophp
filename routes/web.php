<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\StudentsController;

Route::get('/', [StudentsController::class,'index'])->name('students.index');
Route::get('/student', [StudentsController::class,'create'])->name('student.create');
Route::post('/student', [StudentsController::class,'store'])->name('students.store');
Route::get('/student/delete/{id}', [StudentsController::class, 'destroy'])->name('student.delete');
Route::get('/student/{id}', [StudentsController::class,'view'])->name('student.view');
Route::post('/student/update', [StudentsController::class,'update'])->name('student.update');

/*Route::get("/", function () {
    $response = Http::get("http://127.0.0.1:8000/api/students");
    $data = $response->json();
    foreach ($data as $student) {
        echo $student["name"].'----'.$student['email'];
        echo "<br>";
    }
});*/