<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Orders</li>
			</ol>
		</nav>
		<div class="row">
			<h1>Orders</h1>
		</div>
		<div class="row">
			<table class="table table-bordered bg-white table-cart">
				<thead class="thead-dark">
					<tr>
						<th width="150">Order Number</th>
						<th>Total Price</th>
						<th>Order Date</th>
						<th>Expired Order</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $orders->fetch_object()): ?>
					<tr>
						<td align="center" class="align-middle">#<?= $row->id ?></td>
						<td align="center" class="align-middle"><?= rupiah($row->total_price) ?></td>
						<td align="center" class="align-middle"><?= $row->order_date ?></td>
						<td align="center" class="align-middle"><?= $row->order_expire ?></td>
						<td align="center" class="align-middle"><?= $row->status ?></td>
						<td class="align-middle">
							<a href="<?= site_url('dashboard/order/detail?id='.$row->id) ?>" class="btn btn-primary btn-sm">Detail</a>
							<?php if (!$row->is_expired && ($row->status == 'unpaid' || $row->status == 'verification')): ?>
								<a href="<?= site_url('dashboard/order/payment?id='.$row->id) ?>" class="btn btn-success btn-sm">Verify</a>
							<?php endif; ?>
						</td>
					</tr>
					<?php endwhile; ?>
					<?php if (mysqli_num_rows($orders) < 1): ?>
					<tr>
						<td align="center" colspan="6">Belum ada order.</td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</main>
