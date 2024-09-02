<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/admin.css">

	<title>Tenjin Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">

		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/">
					<i class='bx bx-home' ></i>
					<span class="text">Home</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="modal_btn-prf">
                        <i class='bx bxs-log-out-circle' ></i>
                        <span class="text">Logout</span>
                    </button>
                </form>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<h4>Selamat datang {{auth()->user()->name}}</h4>
		</nav>

		<!-- MAIN -->
		<main>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3><i class='bx bx-history'></i>  Recent Orders</h3>
					</div>
					<table>
						<thead>
							<tr>
                                <th>Id</th>
								<th>Nama</th>
								<th>Product</th>
								<th>Jumlah</th>
								<th>Tanggal Order</th>
								<th>Nomor Telepon</th>
								<th>Payment</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($transaction as $trd)
							<tr>
                                <td>{{$trd['id']}}</td>
                                <td>
                                    <p>{{$trd['name']}}</p>
								</td>
								<td>{{$trd['product']}}</td>
								<td>{{$trd['jumlah']}}</td>
								<td>{{$trd['created_at']}}</td>
								<td>{{$trd['no_hp']}}</td>
								<td>{{$trd['payment_method']}}</td>
								<td>
                                    <form method="POST" action="/order/ordestroy/{{$trd->id}}">
                                        @method('delete')
                                        @csrf
                                        <input value="Delete" type="submit" class="button__icon"></input>
                                    </form>
                                </td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
			<!-- Table User -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3><i class='bx bx-user' ></i>  User</h3>
						<a href="/regist"><i class='bx bx-plus'></i></a>
					</div>
					<table>
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($user as $us)
							<tr>
                                <td>{{$us['id']}}</td>
                                <td>
                                    <p>{{$us['name']}}</p>
								</td>
								<td>{{$us['username']}}</td>
								<td>{{$us['email']}}</td>
                                <td>
                                    <form method="POST" action="/user/usdestroy/{{$us->id}}">
                                        @method('delete')
                                        @csrf
                                        <input value="Delete" type="submit" class="button__icon"></input>
                                    </form>
                                </td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
			<!-- Product -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3><i class='bx bx-purchase-tag' ></i>  Product List</h3>
						<a href="/dashboard/product"><i class='bx bx-plus'></i></a>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nama Product</th>
								<th>Deskripsi</th>
								<th>Image</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($products as $prs)
							<tr>
								<td>
                                    <p>{{$prs['name_product']}}</p>
                                    </td>
                                    <td>{{$prs['deskripsi']}}</td>
                                    <td><img src="{{ asset('storage/'.$prs->image) }}" alt=""></td>
								<td>{{$prs['price']}}</td>
								<td>{{$prs['stok']}}</td>
								<td>
									<a href="/dashboard/product/{{$prs['slug']}}"><i class='bx bx-pencil' ></i></a>
									<form method="POST" action="/product/usdestroy/{{$prs->id}}">
                                        @method('delete')
                                        @csrf
                                        <input value="Delete" type="submit" class="button__icon"></input>
                                    </form>
                                </td>
                                </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
			<!-- Contact -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3><i class='bx bx-user-pin' ></i>  Contact List</h3>
						<a href="/#m1-o"><i class='bx bx-plus'></i></a>
					</div>
					<table>
						<thead>
							<tr>
								<th>Email</th>
								<th>Deskripsi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($contact as $cn)
                            <tr>
                                <td>
                                    <p>{{$cn['email']}}</p>
								</td>
								<td>{{$cn['massage']}}</td>
								<td>
                                    <form method="POST" action="/contact/cndestroy/{{$cn->id}}">
                                        @method('delete')
                                        @csrf
                                        <input value="Delete" type="submit" class="button__icon"></input>
                                    </form>
								</td>
                                </tr>
                            @endforeach
                                </tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="assets/js/admin.js"></script>
</body>
</html>
