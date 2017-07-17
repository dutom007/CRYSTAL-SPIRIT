<?php


// VARIABLE
	$_VARIATION_PRIX	= 20;
	$produit			= 1;
	$mon_tableau		= array();
	$qtt 				= 10;
	

	
// Traitement des fichiers produits swaro
foreach (glob("./products/*.csv") as $filename) {
		$path_parts = pathinfo($filename);
		
	
	// on ouvre le fichier
	$monfichier = fopen($filename, 'r+');
	$ligne 				= 0;

//lecture ligne par ligne
	if($monfichier) {
		
		while (($data = fgetcsv($monfichier,1000, ',' )) !== false)
		{
			//On ignore la premiere ligne
				if( $ligne == 0 ) {$ligne ++;continue;}
		
			//Recuperation des infos produit	
				$id				= $path_parts['filename'];
				$per_package	= str_replace(',', '', ($data[4]));
				
			//Verif si mg ou g
				$current_poids	='';
				$search  = array('.',',');
				$replace = array('','.');
				$current_price	= floatval(str_replace($search,$replace,$data[5])) - $_VARIATION_PRIX;
				
			//Calcul prix mini & poids
				$final_price = ($ligne == 1) ? $current_price : min($current_price, $mon_tableau[$id]['prix']);
				

				
			//enregistrement d'un produit
				$mon_tableau[$id]['name']			= $id;
				$mon_tableau[$id]['description']	= '';
				$mon_tableau[$id]['prix']			= $final_price;
				$mon_tableau[$id]['id']				= $produit;
				
			
			//declinaisons
				$mon_tableau[$id]['declinaison'][$data[0]]= array(
					'couleur'	=> '',
					'effet'		=> '',
					'foil'		=> '',
					'poids'		=> '',
					'taille'	=> '',
					'ref'		=> $data[0],
					'prix'		=> $current_price,
					'qtt'		=> $qtt,
					'ean'		=> $data[10],
				);
				
				
			//Ligne suivante
				$ligne++;
				
		}
		$produit++;
		
	}
	
	
}


	/*
// /* LIGHT 
// on ouvre le fichier
	$monfichier = fopen('light.csv', 'r+');

// lecture ligne par ligne
	if($monfichier) {
		
		while (($data = fgetcsv($monfichier,1000, ',' )) !== false)
		{
			// On ignore la premiere ligne
				if( $produit == 0 ) {$produit ++;continue;}			
				
			// Recuperation des infos produit	
				$id				= $data[0];
				$per_package	= str_replace(',', '', ($data[9]));
				
			// Verif si mg ou g
				$current_poids	= floatval(str_replace(',','.',$data[10]));
				
			// Calcul prix mini & poids
				
				$final_poids = (isset($mon_tableau[$id]['poids'])) ? min($current_poids, $mon_tableau[$id]['poids']) : $current_poids ;

				

			// enregistrement de la caracteristique manquante
				$mon_tableau[$id]['poids']			= $final_poids;
			// declinaisons
				$mon_tableau[$id]['declinaison'][$data[6]]['couleur']	= $data[4];
				$mon_tableau[$id]['declinaison'][$data[6]]['effet']		= $data[5];
				$mon_tableau[$id]['declinaison'][$data[6]]['taille']	= str_replace(',', '.', "{$data[3]} (x{$per_package})");
				$mon_tableau[$id]['declinaison'][$data[6]]['ref'] 		= $data[6];
				$mon_tableau[$id]['declinaison'][$data[6]]['poids']		= $current_poids;
				$mon_tableau[$id]['declinaison'][$data[6]]['qtt']		= $qtt;	
				$mon_tableau[$id]['declinaison'][$data[6]]['prix']     = str_replace(',','.',$data[7]) - $_VARIATION_PRIX ;
				
		}
		
	}
on ferme le fichier
	fclose($monfichier);
	
// KNUBS
// on ouvre le fichier
	$monfichier = fopen('knubs.csv', 'r+');

// lecture ligne par ligne
	if($monfichier) {
		
		while (($data = fgetcsv($monfichier,1000, ',' )) !== false)
		{
			// On ignore la premiere ligne
				if( $produit == 0 ) {$produit ++;continue;}			
				
			// Recuperation des infos produit	
				$id				= $data[0];
				$per_package	= trim(str_replace(',', '', ($data[5])));
				
			// Verif si mg ou g
			
				$current_poids	= floatval(str_replace(',','.',$data[8]));
				$current_poids  = ($current_poids > 40) ? $current_poids * 0.001 : $current_poids;

				
			// Calcul prix mini & poids
				$final_poids = (isset($mon_tableau[$id]['poids'])) ? min($current_poids, $mon_tableau[$id]['poids'])  : $current_poids ;
				
				
			// enregistrement de la caracteristique manquante
				$mon_tableau[$id]['poids']			= $final_poids;
				
			// declinaisons
				$mon_tableau[$id]['declinaison'][$data[10]]['couleur']	= $data[2];
				$mon_tableau[$id]['declinaison'][$data[10]]['effet']	= $data[3];
				$mon_tableau[$id]['declinaison'][$data[10]]['foil']		= $data[4];	
				$mon_tableau[$id]['declinaison'][$data[10]]['taille']	= str_replace(',', '.', "{$data[1]} (x{$per_package})");
				$mon_tableau[$id]['declinaison'][$data[10]]['ref'] 		= $data[10];
				$mon_tableau[$id]['declinaison'][$data[10]]['poids']	= $current_poids;
				$mon_tableau[$id]['declinaison'][$data[10]]['qtt']		= $qtt;	
				$mon_tableau[$id]['declinaison'][$data[10]]['prix']     = str_replace(',','.',$data[5]) - $_VARIATION_PRIX ;
		}
		
	} */

	STRANDS 
// on ouvre le fichier
	$monfichier = fopen('metal.csv', 'r+');

//lecture ligne par ligne
	if($monfichier) {
		
		while (($data = fgetcsv($monfichier,1000, ',' )) !== false)
		{
			//On ignore la premiere ligne
				if( $produit == 0 ) {$produit ++;continue;}			
				
			//Recuperation des infos produit	
				$id				= $data[1];
				$per_package	= trim(str_replace('', '', ($data[6])) * $data[7]);
				
			//Verif si mg ou g
				$current_poids	= floatval(str_replace(',','.',$data[7]));
				
			//Calcul prix mini & poids
				$final_poids = (isset($mon_tableau[$id]['poids'])) ? min($current_poids, $mon_tableau[$id]['poids']) : $current_poids ;
				
				
			//enregistrement de la caracteristique manquante
				$mon_tableau[$id]['poids']			= $final_poids;
				
			//declinaisons
				// $mon_tableau[$id]['declinaison'][$data[6]]['couleur']	= $data[4];
				// $mon_tableau[$id]['declinaison'][$data[6]]['effet']		= '';
				$mon_tableau[$id]['declinaison'][$data[6]]['taille']	= str_replace(',', '.', "{$data[3]} (x{$per_package})");
				$mon_tableau[$id]['declinaison'][$data[6]]['ref'] 		= $data[11];
				$mon_tableau[$id]['declinaison'][$data[6]]['poids']		= $current_poids;
				$mon_tableau[$id]['declinaison'][$data[6]]['qtt']		= $qtt;			
				$mon_tableau[$id]['declinaison'][$data[6]]['prix']      = str_replace(',','.', $data[7]) - $_VARIATION_PRIX;
				$mon_tableau[$id]['declinaison'][$data[6]]['ean13'] 	= $data[0];

		}
		
	}
	

	
//on ferme le fichier
	fclose($monfichier);


	
	
// Création des fichiers.
	// Ouverture		
	
		
		// $fp = fopen('bonjouss.csv','w');
		// fputcsv($fp, array('id', 'name','description', 'prix', 'poids','qtt'));
		
		$fp2 = fopen ('declinaisons.csv','w');
		fputcsv($fp2, array ('id', 'attribut', 'valeur', 'ref','impactprix','impactpoids','qtt' ));
		
		 // $fp3 = fopen ('effets.csv' , 'w');
        // fputcsv($fp3, array ('id', 'attribut', 'valeur', 'ref','impactprix','impactpoids','qtt'  ));
         

		
	// Parcours 
		foreach ( $mon_tableau as $key => $ligne )
		{
			Ecriture produit + calcul difference prix et poids pour les declinaisons.
			// if (!empty($ligne['name']))
			// {
				// echo '<br />'.$ligne['name'].'<br />';
				// fputcsv($fp, array ($ligne['id'],$ligne['name'],$ligne['description'],$ligne['prix'], $ligne['poids']));
				
				// foreach ( $ligne['declinaison'] as $declinaison )
			//Verification si effet existe, si oui l'afficher si non, on n'utilisera pas cet attribut.
						
				  // if (!empty( $declinaison['effet']))
                 // {
					// echo ' '.$declinaison['ref'];	
                     // fputcsv($fp3, array($ligne['id'],'Taille:select:1, Couleur:select:2, Effet:select:0',"{$declinaison['taille']}:1,{$declinaison['couleur']}:2,{$declinaison['effet']}:0",$declinaison['ref'], $declinaison['prix']- $ligne['prix'], $declinaison['poids']-$ligne['poids'],$declinaison['qtt']));
                 // }
             
                else { fputcsv($fp2, array($ligne['id'],'Taille:select:1, Couleur:select:2, Effet:select:0 ',"{$declinaison['taille']}:1,{$declinaison['couleur']}:2,{$declinaison['effet']}:0",$declinaison['ref'],$declinaison['prix']-$ligne['prix'], $declinaison['poids']-$ligne['poids'],$declinaison['qtt'])); }
             
            
        
			}
		}
		
		
		
	// Fermeture
		fclose($fp);





?>