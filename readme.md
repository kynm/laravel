## Laravel PHP Framework
### research
* tìm hiểu về cấu trúc framwork laravel
* cách config laravel
* tìm hiểu về route , controler, model và view trong laravel
### install.
#### enviroment. ####
   
* ubunut, mysql, apche, PHP >= 5.4,Composer
* create project: 
<pre><code>
wget http://laravel.com/laravel.phar
mv laravel.phar laravel
sudo mv laravel /usr/local/bin
sudo chmod +x /usr/local/bin/laravel
</code></pre>
### một số lệnh hay sử dụng trong laravel ###
<pre><code>
composer install
composer dump-autoload
php artisan serve
php artisan migrate
php artisan db:seed
</code></pre>
   
### cấu trúc MVC trong laravel ###

### Controller : ###
   
* Khi được Router gọi, controller sẽ tiếp nhận lời gọi và xử lý.
* Nó có thể render trực tiếp dạng text (return một string bất kỳ, mở rộng ra thì có có thể là xml, json, html, v.v...)
*  Nó có thể gọi View::make và truyền hoặc không truyền tham số cho view, thiết lập master layout.
*  Nó có thể gọi các hàm của Model để tương tác với cơ sở dữ liệu
*  Và … tùy bạn muốn mà nó có công dụng khác, ở mức độ cơ bản, và với mô hình MVC như hình trên thì bấy nhiêu là đủ rồi. Trong nhiều trường hợp thì cách làm chung là controller sẽ gọi các hàm của model, ghi vào biến global hay local tùy bạn, sau đó phân tích và gọi view tương ứng, đáp lại người dùng.
   
### View: ###
*  Để chỉ ra layout nào sẽ được dùng thì trong controller ta thêm vào protected $layout = 'layouts.master';
*  Laravel sử dụng Blade Templating, xem link http://laravel.com/docs/templates để xem cú pháp của nó.
*  Trong view chúng ta có thể có sub view, dùng @include, chi tiết xem link Blade Templating ở trên
   
#### Model : ####

* Modele của laravel hỗ trợ cả câu lệnh sql hoặc dùng Dom. chính vì thế có khả năng hộ trợ khá linh hoạt việc truy vấn sql.
   
#### một thành phần vô cùng quan trọng trong laravel là là Route : ####
Laravel có một thành phần routing rất công dụng, nó được xây dựng trên nền tảng Symfony’s routing component. Và cung cấp cho bạn cách dễ dàng sử dụng những giao diện người dùng hay những hàm tùy biến.
   
* Route với tham số đi kèm
<pre><code>
	// will be used to handle GET requests.
	Route::get('index',function()
	{
	   echo 'this is index page';
	});
	 
	Route::get('login',function()
	{
	   echo 'GET login requests will be hndled here.';
	});
	 
	// will be used to handle POST requests.
	Route::post('login', function() 
	{
	   echo 'POST login requests will be handled here.';
	});
</code></pre>
   
* Route có filters
<pre><code>
	// parameter {id} will be passed to the closure.
	Route::any('post/{id}',function($id)
	{
	    echo "post with id: $id";
	});
	 
	//binding models to route parameters.
	Route::model('post','Post'); //binds a model to the route parameter {post}
	 
	// A model with given post id will be passed to closure for any HTTP request.
	Route::any('post/{post}',function($post)
	{
	    echo "post with id: $post->id";
	});
</code>
</pre>
## Vẽ bản đồ bằng charjs ##
#### Install : ####

-download tại : http://www.chartjs.org/
- copy to : /js/Chart.min.js
       type="text/javascript" src="/js/Chart.min.js">
   
#### Using : ####
* Vẽ biểu đồ dạng đường
<pre><code>var myLineChart = new Chart(document.getElementById("canvas").getContext("2d")).Line(LineChart, {scaleFontSize : 13, scaleFontColor : "#ffa45e"});
</code></pre>
<pre>
<code>
var LineChart = {
    labels: ["Ruby", "jQuery", "Java", "ASP.Net", "PHP"],
    datasets: [{
        fillColor: "rgba(151,249,190,0.5)",
        strokeColor: "rgba(255,255,255,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        data: [10, 20, 30, 40, 50]
    }, {
        fillColor: "rgba(252,147,65,0.5)",
        strokeColor: "rgba(255,255,255,1)",
        pointColor: "rgba(173,173,173,1)",
        pointStrokeColor: "#fff",
        data: [28, 68, 40, 19, 96]
    }]
}
</code>
</pre>
* Vẽ biểu đồ dạng cột
<pre><code>var var myBarChart = new Chart(document.getElementById("canvas").getContext("2d"));
</code></pre>
<pre>
<code>
	var BarChart = {
    labels: ["Ruby", "jQuery", "Java", "ASP.Net", "PHP"],
    datasets: [{
        fillColor: "rgba(151,249,190,0.5)",
        strokeColor: "rgba(255,255,255,1)",
        data: [13, 20, 30, 40, 50]
    }, {
        fillColor: "rgba(252,147,65,0.5)",
        strokeColor: "rgba(255,255,255,1)",
        data: [28, 68, 40, 19, 96]
    }]
}
</code>
</pre>
   
* ngoài ra charjs cũng hỗ trợ nhiều dạng biểu đồ khác có thể xem tại http://www.chartjs.org/docs/
## Code ##

* viêt một ứng dụng đầu tiên bằng framework laravel với các chức năng:
* đang ký, đăng nhập
* quản bài viêt (thêm, sửa, xóa)
* hiển thị bài viết
* sử dụng bootstrap trong larael
* tìm hiểu sử dụng charjs để vẽ biểu đồ
* 

