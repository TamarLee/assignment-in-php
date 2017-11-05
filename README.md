დავალება 1

გვაქვს ტექსტური ფაილი data.txt (მიმაგრებული იქნება დავალებასთან ერთად), რომელიც შედგება x ხაზისგან. თითოეულ ხაზზე შეიძლება ეწეროს მხოლოდ რიცხვი ან ტექტი. დაწერეთ პროგრამა რომელიც დაითვლის მხოლოდ პირველი n (n იყოს მაგალითად 12) ხაზზე მოთავსებული რიცხვების ჯამს (თუ ხაზზე რიცხვი არ წერია უნდა გამოტოვოს).

მაგ:

4
Test
3
5
Test123
7

პირველი 4 ხაზის ჯამი (n=4) მოგვცემს 12-ს (4+3+5).

მინიშნება: http://php.net/manual/en/function.is-numeric.php






დავალება 2

შექმენით HTML ფორმა რომელშიც იქნება შემდეგი ველები:

მომხმარებლის სახელი (input[type=”text”])
იმეილი (input[type=”text”])
ტექსტი (textarea)

ფორმიდან გაგზავნილი ინფორმაციის შენახვა უნდა მოხდეს data.txt (პირველ დავალებასთან კავშირი არ აქვს) ფაილში შემდეგი ფორმატით:

Name: __INPUT__VALUE__
Email: __INPUT__VALUE__
Text: __INPUT_VALUE__

ახალი გაგზავნილი ინფორმაცია არ უნდა დაიკარგოს და მიემატოს ფაილის ბოლოში.

ფორმიდან გაგზავნილი მონაცემები გამოყოფილი უნდა იყოს ახალ ხაზზე *** (სამი ფიფქი) სიმბოლოთი.

მაგალითი (ფორმის 3ჯერ გაგზავნის შემთხვევაში):

Name: saxeli1
Email: test@test.com
Text: hello world
***
Name: saxeli2
Email: test@test.com
Text: hello world
***
Name: saxeli3
Email: test@test.com
Text: hello world

პირველ და ბოლო ხაზზე *** არ უნდა იყოს.







დავალება 3

გვაქვს შემდეგი მასივი:

$fields = [
	['type' => 'text', 'name' => 'username', 'value' => 'test'],
	['type' => 'text', 'name' => 'email', 'value' => ''],
	['type' => 'password', 'name' => 'password', 'value' => ''],
	[
		'type' => 'select',
		'name' => 'gender',
		'options' => [
			['value' => 'male', 'text' => 'Male'],
			['value' => 'female', 'text' => 'Female']
		]
	],
];


დაწერეთ php კოდი რომელიც ამ მასივიდან დინამიურად დააგენერირებს HTML ფორმას. კოდი უნდა იყოს დინამიური ანუ მასივში ელემენტების დამატების ან ცვლილების შემთხვევაში დაგენერირებული HTML კოდიც შესაბამისად უნდა შეიცვალოს. თითოეული ელემენტი უნდა იყოს <div> ტეგში ჩასმული. (სიმარტივისთვის დავუშვათ რომ ‘type’ ინდექსის შესაძლო მნიშვნელობებია მხოლოდ text, password და select).

მაგალითად ზედა მასივმა უნდა დააგენერიროს შემდეგი HTML ფორმა:

<form>
	<div>
		<input type="text" name="username" value="test">
	</div>
	<div>
		<input type="text" name="email" value="">
	</div>
	<div>
		<input type="password" name="password" value="">
	</div>
	<div>
		<select name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
	</div>
</form>
