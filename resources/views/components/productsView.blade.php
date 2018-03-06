<div>
    @foreach($products as $product) 
        {{ 'id : ' . $product->id }} <br>
        {{ 'price : ' . $product->price }} <br>
        {{ 'product name : ' . $product->name }} <br><br>
    @endforeach()
</div>

{{-- http://localhost/.../pagination?page=1 --}}
<div class="links-pagination">
    links
    {!! $products->links() !!}</div>

{{-- http://localhost/.../pagination?sort=votes&page=1 --}}
<div class="links-pagination">
    appends
    {!! $products->appends(['sort'=>'votes'])->links() !!}</div>

{{-- http://localhost/.../pagination?page=1#foopin.site --}}
<div class="links-pagination">
    fragment 
    {!! $products->fragment('foopin.site')->links() !!}</div>


<style>
    .links-pagination{
        width: 100%;
        margin: 5px;
        color: white;
        font-weight: bold;        
        background: lightslategrey;
        padding: 10px;
    }
    .pagination li {
        color: gray;
        background: white;
        display: table-cell;
        border: 1px solid lightslategrey;
        padding: 10px;
        list-style: none;
    }
    .pagination li a{
        color: gray;
    }
    
</style>