<?php
/**
 * Project: base
 *
 * Author: Farhan Wazir
 * Email: farhan.wazir@gmail.com
 * License: MIT
 * Copyright 2017 Farhan Wazir
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING
 * BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

if ( ! function_exists('parse_decimal'))
{
    /**
     * Convert number in decimal
     *
     * @param $amount
     * @param bool $sell
     * @return mixed
     */
    function parse_decimal($amount, $decimal = 2, $seprator = '')
    {
        return number_format((float)$amount, $decimal, '.', $seprator);
    }
}

if ( ! function_exists('amount_national'))
{
    /**
     * Convert amount for User in MXN
     *
     * @param $amount
     * @param bool $sell
     * @return mixed
     */
    function amount_national($amount, $sell = true)
    {
        return parse_decimal(app('App\AppClasses\Exchange\ExchangeTrading')->calculator($amount,
            \Illuminate\Support\Facades\Auth::user()->profile->currency, $sell));
    }
}