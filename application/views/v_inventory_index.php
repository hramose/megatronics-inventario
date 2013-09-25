<?php
 $this->load->view('inc/header');
?>
<div data-ng-app>
<div data-ng-controller="InventarioCtrl">

	<div class="container">

	<table class="table">
	<thead>
		<tr>
			<th>SKU</th>
			<th>Description</th>
			<th>QTY</th>
		</tr>
	</thead>
	<tbody>
	<tr data-ng-repeat="item in items">
		<td>{{item.sku}}</td>
		<td>{{item.description}}</td>
		<td>{{item.qty}}</td>
	</tr>
	</tbody>
	</table>



	</div>

</div>
</div>
<?php
$this->load->view('inc/footer');
?>