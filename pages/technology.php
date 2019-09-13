

    
	<div class="container bm b2">
		<div class=row>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m" style="height: 700px;">
				<div class="row1">
					<?php
						$sql="select id from tbl_cat where en_name='".$_GET['cate']."'";
						$result=$conn->query($sql);
						$row = $result->fetch_assoc();
						$cate_id=$row['id'];
						var_dump($cate_id);

						$result1=$conn->query("SELECT * FROM `tbl_art` WHERE cate_id=".$cate_id);
						$row1 = $result1->fetch_assoc();
					?>
					<div class="msx">
						<p class="msx-p1 "><a href="?article=<?php echo $row1['id'] ?>"><?php echo $row1['title'] ?></a></p>
					</div>
					<div class="row">
						<div class="msx-img"></div>
					</div>
					<div class="row">
						<div class="dream">
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 xx" >
								<div class="row">
									<img src="./img/uu.jpg" class="img-responsive ll" alt="Image" width="100%">
								</div>
							</div>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
								<a href="../pages/News.html" class="ll">ថាមែន មែន! OPPO ធ្វើទូរស័ព្ទ Avengers ទាល់តែបាន!</a>
							</div>
						</div>
						<div class="dream">
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 xx" >
								<div class="row">
									<img src="./img/uu1.jpg" class="img-responsive ll" alt="Image" width="100%">
								</div>
							</div>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
								<a href="./pages/News.html" class="ll1">Ambient Mode ថ្មីរបស់ទូរទស្សន៍ Samsung QLED ពិតជាផ្តល់ឱ្យអ្នកលោក នូវសោភ័ណ្ឌភាពដ៏ប្រណិតសម្រាប់គេហដ្ឋាន!!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="height: 700px;">
				<div class="row">
					<div class="bank" style="height: 300px;">
						<div class="thumbnail" style="border:none;box-shadow: none;border-radius: 0px;">
							<img src="./img/nico.jpg" class="img-responsive" alt="Image">
							<a href="./pages/News.html" class="lx"><p style="text-align: center;">រញ្ជួយអ៊ីអនម៉ល ដោយសារតែការហ្សូមរបស់ Huawei P30 សេ៊រី និងលោក នីកូ!</p> </a>
						</div>	
					</div>
				</div>
				<div class="row" >
					<div class="bank" style="height: 300px;">
						<div class="thumbnail" style="border:none;box-shadow: none;border-radius: 0px;">
							<img src="./img/gh2.jpg" class="img-responsive" alt="Image">
							<a href="./pages/News.html" class="lx" >
                            <p style="text-align: center;" class="john">ចិនគ្រោងប្រើបច្ចេកវិទ្យាស្កេនមុខ ដើម្បីហាមឃាត់ភ្ញៀវទេសចរណា ដែលគ្មានសណ្តាប់ធ្នាប់ ចូលទៅតំបន់កម្សាន្តធំៗ </p>                       </a>
						</div>	
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="height: 700px;">
				<div class="row">
					<div class="bank" style="height: 300px;">
						<div class="thumbnail" style="border:none;box-shadow: none;border-radius: 0px;">
							<img src="./img/gh.jpg" class="img-responsive" alt="Image">
							<a href="./pages/News.html" class="lx"><p style="text-align: center;">មកស្គាល់សាលាបណ្ដុះអ្នកជំនាញអាជីពផ្នែក Network និងមានឱកាសការងារដល់ក្រៅប្រទេស</p>
						</div>	
					</div>
				</div>
				<div class="row" >
					<div class="bank" style="height: 300px;">
						<div class="thumbnail" style="border:none;box-shadow: none;border-radius: 0px;">
							<img src="./img/gh3.jpg" class="img-responsive" alt="Image">
							<a href="./pages/News.html" class="lx"><p style="text-align: center;">Tesla ​ត្រៀម​ដាក់​ឲ្យ​ប្រើ​សេវាកម្ម​តាក់ស៊ី​បើក​ស្វ័យប្រវត្តិ ជិះ ១,៦ គីឡូ​អស់មិនដល់ ៨០០ រៀល
                          </p>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					 <hr class="hr4" >
				</div>
			</div>
		</div>
	</div>	

	<div class="container xc">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="height: 660px;">
				<div class="row">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/k1.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="../pages/News.html" class="kk">មុខងារ ២ នេះហើយ ដែលជាជំនួយការបើកបរដ៏ឆ្លាតវៃ សម្រាប់រថយន្ត Nissan TERRA 2019!</a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/k2.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="../pages/News.html" class="kk">
                                 VOOC 3.0 របស់ F11 Pro ជាជំនួយការដែលធ្វើឲ្យលោកអ្នកអស់កង្វល់ ពីបញ្ហាទូរស័ព្ទឆាប់អស់ថ្ម! (មានវីដេអូ)                                </a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/k3.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="../pages/News.html" class="kk">
                                 ប្លែកអស់ទាស់! ការប្រគំតន្រ្តីព្រះច័ន្ទពេញវង្ស ជាមួយ Huawei P30 សេ៊រី ផ្អើលកោះពេជ្រ ថ្ងៃ ២៦ មេសានេះ! (មានវីដេអូ)                                </a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/k4.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="#" class="kk">
                                 រងការរិះគន់ បន្ទាប់ពីក្រុមហ៊ុនអាមេរិក ប្រើឧបករណ៍ពាក់ក្បាលម្យ៉ាងដាក់សិស្សចិន ១ម៉ឺននាក់ ជំនួយដល់ការសិក្សាពួកគេ (មានវីដេអូ)                                </a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/k5.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="#" class="kk">
                                 
                                 នឹកដើមដង្ហើមដល់ Reno បង្ហាញខ្លួនជាផ្លូវការហើយ!</a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/k6.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="#" class="kk">
                                 Galaxy ស៊េរី A70 និង A80 ជំនាន់ថ្មីរបស់សាមសុង បានដាក់សម្ពោធជាផ្លូវការកាលពីយប់មិញ នាទីក្រុងបាងកក ប្រទេសថៃ! (មានវីដេអូ)                                </a>
						</div>
					</div>
				</div>
			</div>



			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="height: 500px;">
				<div class="row">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;">	
							<div class="row">
								<img src="../img/mj1.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="#" class="kk">
                                 រីករាយឆ្នាំថ្មី ប្រពៃណីជាតិខ្មែរ ជាមួយម៉ាស៊ីនត្រជាក់សាមសុង Wind-FreeTM !                                </a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;">	
							<div class="row">
								<img src="../img/mj2.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="#" class="kk">
                                 
                                 អស្ចារ្យ! សម្រាប់ជនពិការភ្នែក មានសង្ឃឹមវិញហើយ ពេលពាក់វ៉ែនតានេះ ពួកគេអាចមើលឃើញ និងដឹងនូវអ្វីដែលពួកគេកំពុងតែសម្លឹងមើល (មានវីដេអូ)                                </a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;">	
							<div class="row">
								<img src="../img/mj3.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="#" class="kk">
                                
                                 មានដែលគិតទេថា នរណាដែលជាសំណប់ចិត្តអ្នកដែលមិនអាចខ្វះបាននោះ?                                </a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/mj4.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;;">
							<a href="#" class="kk">
                                
                                 កម្មវិធី «SmartScale» នាំមកជូនដោយ «Seedstars» នឹងដំណើរការនៅក្នុងខែ ឧសភា!                                 </a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/mj5.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="#" class="kk">
                                 
                                 Grab ផ្តល់អត្ថប្រយោជន៍ថ្មីៗជាច្រើនសម្រាប់អ្នកធ្វើដំណើរក្នុងតំបន់អាស៊ីអាគ្នេយ៍ នៅឯកាសយានដ្ឋានអន្តរជាតិភ្នំពេញ  និងអាកាសយានដ្នានទូទាំងតំបន់នេះ!  !</a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="f1">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="height: 95px;background: pink;">	
							<div class="row">
								<img src="../img/mj6.jpg" class="img-responsive kl" alt="Image">
							</div>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="height: 95px;">
							<a href="#" class="kk">
                                 
                                 តោះ! មកទាយទាំងអស់គ្នាមើល Panasonic នឹងមានផ្តល់ជូនរង្វាន់អ្វីខ្លះ នៅក្នុងរដូវកាលបុណ្យចូលឆ្នាំប្រពៃណីខ្មែរខាងមុខនេះ!                                </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
			
			
			
			

		

		


					

	