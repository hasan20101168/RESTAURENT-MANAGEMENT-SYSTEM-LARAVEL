<div>
    <form  method="POST" action="/addcost">
        @csrf
    <p> ADD COST </p>
    <label for="item_name">Item Name</label><br>
    <input type="text" name="item_name"><br>
    <label for="unit"> NO of Units</label><br>
    <input type="text" name="unit"><br>
    <label for="unit_price">Unit Price</label><br>
    <input type="number" name ="unit_price"><br>
    <button type="submit">Submit</button>
    </form>
</div>