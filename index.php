<?php  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Cache-control" content="no-cache">
		<link rel="stylesheet" href="./assets/css/style.css" />
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" />
		<script src="./assets/js/sweetalert2.all.min.js"></script>
		<title>Student Reward Tracker</title>
	</head>
	<body>
		<nav>
			<div class="navbar">
				<div id="brand">
					<a href="#!">Student Reward System</a>
				</div>
				<div>
					<a href="https://github.com/Roshane-Johnson" target="blank_"><i class="fab fa-github"></i>Roshane-Johnson</a>
					<a href="https://github.com/KG-DI-KXNG" target="blank_"><i class="fab fa-github"></i>KG-DI-KXNG</a>
				</div>
			</div>
		</nav>

		<div class="grid">
			<div class="grid-item students-sec">
				<section class="section">
					<header>
						<h2 class="card-header">Students</h2>
						<p class="card-subheader">All students and their respective stars</p>
					</header>
					<ul class="student-wrapper">
						<!-- Example Output -->
						<!-- <li class="student">
							<div class="student-name">@Roshane-Johnson</div>
							<div class="stars">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i
									><i class="fas fa-star"></i>
								</div>
							</li> -->
					</ul>
				</section>
			</div>
			<div class="grid-item">
				<div class="grid-item">
					<section class="section">
						<header>
							<h2>Add Student</h2>
						</header>
						<div>
							<div class="form-group">
								<div class="form-item">
									<label for="studentNameC">Student Name</label>
									<input type="text" name="studentNameC" id="studentName" required="" />
								</div>
								<div class="form-item">
									<label for="studentStarsC">Student Stars</label>
									<select name="studentStarsC">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
									</select>
								</div>
								<div class="form-item button">
									<div class="form-item"><button name="send_c" style="background-color: mediumseagreen">Create</button></div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="grid-item" style="margin-top: var(--grid-gap)">
					<section class="section">
						<header>
							<h2>Update Student</h2>
						</header>
						<div>
							<div class="form-group">
								<div class="form-item">
									<label for="studentNameU">Student Name</label>
									<select name="studentNameU">
										<!-- <option value="name_1">name_1</option> -->
									</select>
								</div>
								<div class="form-item">
									<label for="studentStarsU">Student Stars</label>
									<select name="studentStarsU">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
									<option value="32">32</option>
									<option value="33">33</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
									</select>
								</div>
								<div class="form-item button">
									<div class="form-item"><button type="submit" name="send_u" style="background-color: orange">Update</button></div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="grid-item" style="margin-top: var(--grid-gap)">
					<section class="section">
						<header>
							<h2>Delete Student</h2>
						</header>
						<div>
							<div class="form-item">
								<label for="studentNameD">Student Name</label>
								<select name="studentNameD">
									<!-- <option value="name_1">name_1</option> -->
								</select>
							</div>
							<div class="form-item button">
								<div class="form-item"><button type="submit" name="send_d" style="background-color: firebrick">Delete</button></div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<footer>
			<div class="footer">
				<div class="copyright">&copy; Copyright 2021 - 2021</div>
				<div class="credits">
					Made in <img src="./assets/images/jamaica.svg" width="20" /> with
					<i class="fas fa-heart" style="color: firebrick; fill: firebrick"></i>
					by <span class="author">Roshane Johnson</span>
				</div>
			</div>
		</footer>
		<script type="module" src="./assets/js/app.js"></script>
	</body>
</html>
