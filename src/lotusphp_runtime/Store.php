<?php

namespace Arthuryinzhen\JDLogistic;

Interface LtStore
{
	public function add($key, $value);
	public function del($key);
	public function get($key);
	public function update($key, $value);
}