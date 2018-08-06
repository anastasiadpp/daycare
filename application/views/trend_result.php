<?php if ($data) ?>
<div class="row">
				<div class="panel-body">
					<h1 style="width: 100%; text-align: center;"><b>SISTEM REKOMENDASI PENITIPAN ANAK SURABAYA</b></h1>
					<h1 style="width: 100%; text-align: center;"><b>BERBASIS <i>TEMPORAL SENTIMENT ANALYSIS</i></b></h1>
					<table class="table table-bordered" border="1" align="center">
						<thead>
				        	<tr>
				        	  <th>No.</th>
				        	  <th>Venue</th>
				        	  <th>Positif</th>
				        	  <th>Negatif</th>
				        	  <th>Netral</th>
				        	  <th>Score</th>
				        	  <th></th>
				        	  <th></th>
				        	</tr>
				      	</thead>
				      	<tbody>
				      		<?php $i = 0; foreach ($data as $datak) {?>
					        <tr>
					          	<td><?= $i+1; ?></td>					          	
					          	<td><?= $datak['venue']; ?></td>
					          	<td><?= $datak['positive']; ?></td>
					          	<td><?= $datak['negative']; ?></td>
					          	<td><?= $datak['netral']; ?></td>
					          	<td><?= $datak['score']; ?></td>
					          	<td><a href="komen/<?= $datak['venue_id']; ?>"><button name="submit" value="Test" class="btn btn-bricky btn-md">
                                    Lihat Komentar</button></a></td>
                                <td><a href="gambar/<?= $datak['venue_id']; ?>"><button name="submit" value="Test" class="btn btn-bricky btn-md">
                                    Lihat Gambar</button></a></td>
					        </tr>
					        <?php $i++; } ?>
					    </tbody>
				    </table>
				</br>
				</div>
			</div>