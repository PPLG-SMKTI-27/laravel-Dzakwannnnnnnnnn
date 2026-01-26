@extends('layouts.layout')
@section('content')
{{-- ADMIN --}}
<section class="table-box">
  <h2>Recent Users</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>John Doe</td>
      <td>john@mail.com</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>Jane</td>
      <td>jane@mail.com</td>
      <td>Inactive</td>
    </tr>
  </table>
</section>

@endsection