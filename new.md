//composer create-project --prefer-dist laravel/laravel (name project)
.env sửa DB_DATABASE=(tên db)
//php artisan make:migration create_products_table --create=products
tạo xong ở folder database/migration 
set tên cột 

//php artisan migrate

//php artisan make:controller StudentController --resource --model=Student

web : Route::resource('students','App\Http\Controllers\StudentController');