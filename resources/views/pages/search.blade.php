@extends('layouts.default')
@section('content')


<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
      <li>
        <a href="index">
          <i class="material-icons">home</i>
        </a>
      </li>
      <li>
        <a href="search.php"> search </a>
      </li>
    </ul>
  </div>
</section>



<section class="p-item-page search-page p-tb-15 bg-bt-gray">
  <div class="container">
    <div class="row">
      <div id="content" class="col-sm-12">
        <div class="search-form ws-box p-15 m-b-20">  
          <form action=""> 
          <div class="control-items">
            <div class="control-item form-title">  
           
              <label class="control-label" for="input-search">
                <b>Search Criteria</b>
              </label>
               </div>
            <div class="control-item">
              <input type="text" name="product" placeholder="Keywords"  id="" class="search_str form-control">
            </div>
            <div class="control-item">
              <select name="category_id" class="form-control">
                <option value="0">All Categories</option>
                <option value="20">Desktop</option>              
              </select>
            </div>
            <div class="control-item checkbox-item">
              <label class="checkbox-inline">
                <input type="checkbox" name="sub_category" value="1" disabled="true"> Search in subcategories </label>
            </div>
            <div class="control-item checkbox-item">
              <label class="control-item checkbox-inline">
                <input type="checkbox" name="description" value="1" id="description"> Search in product descriptions </label>
            </div>
            <div class="control-item button-item">
              <button type="submit" id="button-search" onclick="funSearch()" name="search" class="btn btn-primary">Search</button>
            </div>

          </div>
          </form>
        </div>
       
        <div class="top-bar ws-box">
          <div class="row">
            <div class="col-md-4">
              <h4 class="page-heading">Search</h4>
            </div>
            <div class="col-md-8 col-sm-12 show-sort">
              <div class="form-group rs-none">
                <label>Show:</label>
                <div class="custom-select">
                  <select id="input-limit" onchange="location = this.value;">
                    <option value="https://www.startech.com.bd/product/search?&amp;search=macbook&amp;limit=20" selected="selected">20</option>
                    <option value="https://www.startech.com.bd/product/search?&amp;search=macbook&amp;limit=25">25</option>
                    <option value="https://www.startech.com.bd/product/search?&amp;search=macbook&amp;limit=50">50</option>
                    <option value="https://www.startech.com.bd/product/search?&amp;search=macbook&amp;limit=75">75</option>
                    <option value="https://www.startech.com.bd/product/search?&amp;search=macbook&amp;limit=100">100</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Sort By:</label>
                <div class="custom-select">
                  <select id="input-limit" onchange="location = this.value;">
                    <option value="https://www.startech.com.bd/product/search?sort=p.sort_order&amp;order=ASC&amp;search=macbook" selected="selected">Default</option>
                    <option value="https://www.startech.com.bd/product/search?sort=pd.name&amp;order=ASC&amp;search=macbook">Name (A - Z)</option>
                    <option value="https://www.startech.com.bd/product/search?sort=pd.name&amp;order=DESC&amp;search=macbook">Name (Z - A)</option>
                    <option value="https://www.startech.com.bd/product/search?sort=p.price&amp;order=ASC&amp;search=macbook">Price (Low &gt; High)</option>
                    <option value="https://www.startech.com.bd/product/search?sort=p.price&amp;order=DESC&amp;search=macbook">Price (High &gt; Low)</option>
                    <option value="https://www.startech.com.bd/product/search?sort=rating&amp;order=DESC&amp;search=macbook">Rating (Highest)</option>
                    <option value="https://www.startech.com.bd/product/search?sort=rating&amp;order=ASC&amp;search=macbook">Rating (Lowest)</option>
                    <option value="https://www.startech.com.bd/product/search?sort=p.model&amp;order=ASC&amp;search=macbook">Model (A - Z)</option>
                    <option value="https://www.startech.com.bd/product/search?sort=p.model&amp;order=DESC&amp;search=macbook">Model (Z - A)</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="main-content p-items-wrap"> 
       


      @if(isset($product[0]))
                       @foreach($product as $row)
              <div class="product_item">            
                  <div class="product_item_inner">
                  <div class="p_item_img\">
                      <a class="img" 
                      href="single/{{$row->id}}">                    
                        <img src="{{asset($row->product_image)}}" alt="Image1" class="">                
                      </a>
                      </div>
                      <div class="product_card_body">
                      <h4 class="cart_title">
                      <a href="#">{{$row->product_name}}</a> </h4>
                      <h6>
                          <i class="material-icons h3">star</i>
                          <i class="material-icons h3">star</i>
                          <i class="material-icons h3">star</i>
                          <i class="material-icons h3">star_border</i>
                      </h6>
                      <div class="short-description">
                        <ul>
                          <li>Intel Atom x5-Z8350 Processor (1.44 GHz To 1.92 GHz, Cache 2MB )   </li>
                       
                          <li>Windows 10 Home </li>
                         
                          <li>Cool and reliable performance  </li>
                        
                          <li>Convert your TV into a smart TV</li>
                        </ul>
                    </div>
                      <h5>
                         
                          <span class="price">{{$row->product_price}} ৳</span>
                          <br>
                        
                      </h5>
                      <div class="flexbtn">
                     
                               
                            <a  class="btnbounce btn-cart crt_popup" href="{{ url('add-to-cart/'.$row->id) }}" >Add to cart <i class="material-icons">shopping_basket</i></a>
                           
                              
                            <a href="{{ url('add-to-compare/'.$row->id) }}" class="btn-compare comp_popup ">  <i class="material-icons">library_add</i>Add to Compare
                              </a>
                             
                         
                      </div>
                    </div>
                   </div>
                            
                   </div>
                            
      @endforeach  
    
                        @else
                       <p style="coler:red">
                          There is no product that matches the search criteria.
                        </p>
                        @endif  
                                    
      </div>

      <div class="bottom-bar">
        <div class="row">
          <div class="col-left">
            <ul class="pagination">
              <li>
                <span class="disabled">PREV</span>
              </li>
              <li class="active">
                <span>1</span>
              </li>
              <li>
                <a href="https://www.startech.com.bd/product/search?&amp;search=macbook&amp;page=2">2</a>
              </li>
              <li>
                <a href="https://www.startech.com.bd/product/search?&amp;search=macbook&amp;page=3">3</a>
              </li>
              <li>
                <a href="https://www.startech.com.bd/product/search?&amp;search=macbook&amp;page=2">NEXT</a>
              </li>
            </ul>
          </div>
          <div class="col-right rs-none text-right">
            <p>Showing 1 to 20 of 54 (3 Pages)</p>
          </div>
        </div>
      </div>
   
       
      </div>
    </div>
  </div>
</section>

@endsection