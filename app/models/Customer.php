<?php
class Customer extends Eloquent {
	protected $fillable = array('name', 'street', 'city', 'state', 'zipcode', 'home_phone', 'work_phone', 'email');
	protected $guarded = array('id');
}