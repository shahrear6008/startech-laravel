@extends('layouts.default')
@section('content')
@section('tittle','PC Builder - Build Your Own Computer - Star Tech')

<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
            <li>
            <a href="/">
                <i class="material-icons">home</i>
            </a>
            </li>
            <li><a href="tool">
            PC Builder
            </a></li>
            <li><a href="#">
            Choose A CPU
            </a></li>       
        </ul> 
    </div>
</section>

<div class="container">
    <div class="p_items_choose">
        <div class="choose_left_range">
            <div class="price_filter">
                <h4>
                    Price Range
                </h4>
                <br />
                <div class="double_range">
                    <div class="values">
                        <span id="range1"> 0 </span>

                        <span id="range2"> 100 </span>
                    </div>

                    <div class="slider-track">
                        <input type="range" min="100" max="82000" value="1000" id="slider-1" oninput="slideOne()" />
                        <input type="range" min="100" max="82000" value="70000" id="slider-2" oninput="slideTwo()" />
                    </div>
                </div>

                <!-- <div class="r_value">
                    <input type="number" class="v_left " name="" id="range1"  value="0" >
                    <input type="number" class="v_right" name="" id="range2"   value="0"  >
                </div>                -->
            </div>

            <div class="avail">
                <div class="label btnli">
                    <span>availability</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span>Type</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span> Number of Core</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span>clock speed</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span>caches</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="pc-builder-choose-content">
            <div class="filter">
                <div class="f_left">
                    <a href="tool"> <i class="material-icons">arrow_back</i></a>
                    <input type="search" name="" id="" placeholder="search" />
                    <i class="f_search material-icons">search</i>
                    <i class="material-icons p_range_popup">filter_list</i>
                    <span>Filter</span>
                </div>
                <div class="f_right">
                    <label for="">text_sort</label>
                    <select class="">
                        <option value="">Default</option>
                        <option value="">price_(Low-High) </option>
                        <option value="">price_(High-low</option>
                    </select>
                </div>
            </div>
 @foreach ($pcb as $row)
            <div class="cpu_content">
                      <a href="{{url('single/'.$row->id)}}"> <img src=" {{asset($row->product_image)}}" /></a>
                        <div class="content_details">
                            <div class="content_left">
                                <h3> {{$row->product_name}}</h3>
                                <ul>
                                    <li>Socket Supported FCLGA1200</li>
                                    <li>Speed 4.00 GHz</li>
                                    <li>Cores- 2 & Threads- 4</li>
                                    <li>4M Intel Smart Cache</li>
                                </ul>
                            </div>
                            <div class="content_right">
                                <div class="cr_inner">
                                    <h3 class="price"> {{$row->product_price}}  ৳</h3>               
                                    <a class="btn buttonB buy_popup" href="{{url('addtopcb/'.$row->id)}}" >add</a>
                                    
                                </div>
                            </div>
                        </div>
                </div>
                              
                              
                              
                             
            @endforeach   
        </div>
           
     </div>
    </div>
</div>

@stop

