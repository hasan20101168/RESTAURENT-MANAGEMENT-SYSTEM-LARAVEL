<div>
    <form  method="POST" action="/addsales">
        @csrf
    <p> ADD DAILY SALES </p>
    <label for="customer_name">Customer Name</label><br>
    <input type="text" name="customer_name"><br>
    <label for="item"> Items </label><br>
    <input type="text" name="item"><br>
    <label for="total_bill">Total Bill</label><br>
    <input type="number" name ="total_bill"><br>
    <button type="submit">Submit</button>
    </form>
</div>