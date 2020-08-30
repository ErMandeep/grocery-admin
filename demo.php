<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>

<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="itemname" class="form-control" required="">
</div>
<label class="col-sm-2 control-label">Category<span style="color:red">*</span></label>
<div class="col-sm-4">
		<select name="itemcategory" class="form-control" required="">
		<option value="">Select</option>
			
		<option value="rice">rice</option>
			
		<option value="pizza">pizza</option>
			
		<option value="Pulses">Pulses</option>
			
		<option value="Sun Shines">Sun Shines</option>
			
		<option value="CURRY LEAF">CURRY LEAF</option>
			
		<option value="Custometic Item">Custometic Item</option>
			
		<option value="Dairy">Dairy</option>
			
		<option value="food">food</option>
			
		<option value="fruits">fruits</option>
				</select>
</div>
</div>

<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Description<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="itemdes"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="number" name="itemprice" class="form-control" required="" placeholder="Per gm/kg/bounch/piece">
</div>
<label class="col-sm-2 control-label">Discount Price<span style="color:red"></span></label>
<div class="col-sm-4">
   <input type="number" name="discount" class="form-control" placeholder="Per gm/kg/bounch/piece">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Attributes(gm/kg/bounch)<span style="color:red">*</span></label>
<div class="col-sm-4">
   <input type="text" name="attribute" class="form-control" required="" placeholder="gm/kg/bounch/piece">
</div>
<label class="col-sm-2 control-label">Image<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="file" name="itemimg" class="form-control" required="" value="Select Image File">
</div>
</div>





<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-default" type="reset">Cancel</button>
		<button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
	</div>
</div>

										</form>
									</div>
								</div>
							</div>