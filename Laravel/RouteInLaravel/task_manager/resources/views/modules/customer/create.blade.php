@extends('layouts.master')
<div class="container">
    <h1>Create new customer
    </h1>
<form action="/customer/store" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Họ và tên:</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Số điện thoại:</label>
      <input type="text" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email:</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
