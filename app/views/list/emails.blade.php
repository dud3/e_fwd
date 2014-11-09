@extends('layouts.internal')
@section('main')

<div ng-controller="emailsListCtrl">

	<table class="table table-hover table-emails">

		<thead>
			<tr>
				<th style="width:3%; padding-left: 14px;"><input type="checkbox" id="mail-check-all" /></th>
				<th>Subject</th>
				<th>Date</th>
				<!-- th>Body</th -->
				<th style="width:5%;"></th>
			</tr>
		</thead>

		<tbody>

			<tr ng-repeat="email in emails" id="id-email<* email.id *>">
				<td style="padding:12px;"><input type="checkbox" id="check-email<* email.id *>" name="check-email<* email.id *>"></td>
				<td ng-bind-html="email.subject"></td>
				<td><* email.utc_time *></td>
				<td><button class="btn btn-info btn-sm">Send&nbsp;<span class="fa fa-paper-plane"></span></button></td>
			</tr>

			<tr>
				<td><input type="checkbox" name="" value=""></td>
				<td>Title of email with some keywords like <span class="label label-primary">California</span> and whatever</td>
				<td>Date</td>
				<td><button class="btn btn-info btn-sm">Send&nbsp;<span class="fa fa-paper-plane"></span></button></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value=""></td>
				<td>Title of email with some keywords like <span class="label label-primary">Davis</span> and <span class="label label-primary">mailing</span></td>
				<td>Date</td>
				<td><button class="btn btn-info btn-sm">Send&nbsp;<span class="fa fa-paper-plane"></span></button></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="" value=""></td>
				<td>This title has <span class="label label-primary">Example1</span> and <span class="label label-primary">example2</span></td>
				<td>Date</td>
				<td><button class="btn btn-info btn-sm">Send&nbsp;<span class="fa fa-paper-plane"></span></button></td>
			</tr>
				<tr>
				<td><input type="checkbox" name="" value=""></td>
				<td>Title with some keywords <span class="label label-primary">Example3</span> and some more <span class="label label-primary">example4</span></td>
				<td>Date</td>
				<td><button class="btn btn-info btn-sm">Send&nbsp;<span class="fa fa-paper-plane"></span></button></td>
			</tr>
				</tr>
				<tr>
				<td><input type="checkbox" name="" value=""></td>
				<td>This title <span class="label label-primary">Example3</span> is pretty long <span class="label label-primary">example4</span>it has and some more <span class="label label-primary">keywords</span></td>
				<td>Date</td>
				<td><button class="btn btn-info btn-sm">Send&nbsp;<span class="fa fa-paper-plane"></span></button></td>
			</tr>
			<tr class="mail-sent">
				<td><input type="checkbox" name="" value=""></td>
				<td>Title of email with some keywords like <span class="label label-primary">California</span> and whatever</td>
				<td>Date</td>
				<td><span class="label label-success mail-sent-label">Sent&nbsp;<span class="fa fa-envelope"></span></span></td>
			</tr>
		</tbody>

	</table>

</div>

@stop
