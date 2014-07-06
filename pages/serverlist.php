	<div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Country
						</th>
						<th>
							Name
						</th>
						<th>
							Ip
						</th>
						<th>
							Site
						</th>
						<th>
							Online(Record)/Max
						</th>
						<th>
							Version
						</th>
						<th>
							Exp
						</th>
					</tr>
				</thead>
				<tbody>

					<?php
    $rs = $pdo->query("SELECT id,name,ip,site,exp FROM servers")->fetchAll();
    if(!$rs){
        print_r($pdo->errorInfo());
    } else {
       foreach($rs as $reg) { 
           $server = new Otinfo($reg['ip']); 
            if ($server->execute()) {
                   echo '
                    <tr>
                        <td>
                            '. $reg['id'] .'
                        </td>
                        <td>	
                            '. $server->serverinfo['location'] .'
                        </td>
                        <td>
                            '. $reg['name'] . '
                             &nbsp;<a href="index.php?pagina=removeserver&ip='.$reg['ip'].'"" title="Remove"><span class="glyphicon glyphicon-remove"></span></a>
                             &nbsp;<a href="index.php?pagina=removeserver&ip='.$reg['ip'].'"" title="Ban"><span class="glyphicon glyphicon-ban-circle"></span>	</a>
                             &nbsp;<a href="index.php?pagina=removeserver&ip='.$reg['ip'].'"" title="Highlight"><span class="glyphicon glyphicon-star"></span></a>	
                        </td>	
			                        <td>
			                            '. $reg['ip'] .'
			                        </td>
                        <td>
                            '.	 $reg['site'] .'
                        </td>
                        <td>
                             ' . $server->players['online'] . '(' . $server->players['peak'] . ')/' . $server->players['max'] . '
                        </td>
                        <td>
                            '. $server->serverinfo['client'] .'
                        </td>
                        <td>
                            '. $reg['exp'] .'
                        </td>
                    </tr>
                    ';
            }
        }
    }
                    ?>



					</tbody>
			</table>
		</div>
	</div>
</div>




<!-- 

<?php

					
					if ($server->execute()) {
						
						echo '
					<tr>
						<td>
							1
						</td>
						<td>
							'. $server->serverinfo['location'] .'
						</td>
						<td>
							shadowcoresgdagdagdaga
						</td>
						<td>
							shadowcores.twifysoft.net
						</td>
						<td>
							shadowcores.twifysoft.net
						</td>
						<td>

							 ' . $server->players['online'] . '(' . $server->players['peak'] . ')/' . $server->players['max'] . '
						</td>
						<td>
							'. $server->serverinfo['client'] .'
						</td>
						<td>
							27x
						</td>
					</tr>
					';
} else {

	echo "alguma merda";
}
					?> -->