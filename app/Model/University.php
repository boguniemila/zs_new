<?php
class University extends AppModel {
	public $actsAs = array(
		'Containable',
	);
	public $belongsTo = array('UniversityType');
	public $hasOne = array('UniversitiesParameter');
	public $hasMany = array('UniversitiesPhoto' => array('className' => 'UniversitiesPhoto',
            'foreignKey' => 'university_id'), 'CourseonUniversity');
	//public $displayField = 'nazwa';

	function szukajUczelniQuery($p,$c=array()) {
		global $db;
		if (!isset($c['limit'])) $c['limit'] = 999999;
		if (!isset($c['page'])) $c['page'] = 1;
		if (!isset($c['first_offset'])) $c['first_offset'] = ($c['page'] - 1) * $c['limit'];
		
		$conds = array(
			"slowo"=>"CONCAT(up.nazwa,up.adres,up.opis,up.www,up.telefon,up.zakladka1,up.zakladka2,up.zakladka3,up.zakladka4,up.tagi) LIKE ",
			"jezyk"=>"k.nazwa LIKE ",
			"jezyk_id"=>"k.typ_uczelni = 3 AND uk.id_kierunek = ",
			"kierunek"=>"k.nazwa LIKE ",
			"kierunek_id"=>"uk.id_kierunek = ",
			"wydzial_id"=>"uk.id_wydzial= ",
			"kierunek_kat"=>"k.id_kat = ",
			"id_wojewodztwo"=>"u.wojewodztwo = ",
			"miasto"=>"up.miasto = ",
			"id_typ"=>"uk.typ = '%s'",
			"id_tryb"=>"uk.tryb = '%s'",
			"rodzaj"=>"University.university_type_id = ",
			"id"=>"u.id = ",
			"ids"=>"u.id IN ",
		);
		$vq = $wq = array();
		foreach ($p as $par=>$val) {
			if (!empty($val)) {
				$wq[] = $conds[$par].''.$val;
			}
		}
		if (in_array('pelne', $c)) {
			$wq[] = "University.abonament > 1";
		} else if (in_array('demo', $c)) {
			$wq[] = "University.abonament = 1";
		} else if (in_array('promowane', $c)) {
			$wq[] = "University.abonament > 2";
		}

		return $wq;
		//$vq= $this->find('all', array('conditions'=>$wq) );
		//public $components = array('Paginator');

		//$q = $this->sq($vq);
		//vdie($q);
		//vdie($q->faa(),$wq);
		$allc =  $this->find('count');
		
		$ids = array_keys($vq);
		$qc = count($ids);
		$r = array();
		
		/*if (isset($p['wydzial_id'])) {$fraza="AND uk.id_wydzial=".$p['wydzial_id']."";
		} else $fraza='';
		if ($qc > 0) {	
			$query = "
				SELECT u.id,uk.*, k.nazwa as 'nazwa_kierunku', w.nazwa as 'wydzial_nazwa'
				FROM uczelnie u 
				LEFT JOIN uczelnie_kierunki uk ON u.id = uk.id_uczelnia AND uk.id_jezyk = 1 
				LEFT JOIN kierunki k ON uk.id_kierunek = k.id AND k.id_jezyk = 1 
				LEFT JOIN wydzialy w ON uk.id_wydzial = w.id 
				WHERE u.id IN (".implode(',',$ids).") ".$fraza."
				ORDER BY w.nazwa, k.nazwa";
			$q = $db->q($query);
			$q = mergeUczelniaQueryHelp($q,$rows);
			foreach ($ids as $id) {
				$r[$id] = $q[$id];
			}
		}*/
		//vd($r,$c,$allc);
		//vdie($q);
		//$q = $db->q()->fk1vaa();
		if (isset($p['id']) && isset($r[$p['id']])) $r = $r[$p['id']];
		return array($r,$allc);
	}
		
	public function resize_image($file, $w, $h, $crop=FALSE) {
		list($width, $height) = getimagesize($file['tmp_name']);
		$r = $width / $height;
		if ($crop) {
			if ($width > $height) {
				$width = ceil($width-($width*abs($r-$w/$h)));
			} else {
				$height = ceil($height-($height*abs($r-$w/$h)));
			}
			$newwidth = $w;
			$newheight = $h;
		} else {
			if ($w/$h > $r) {
				$newwidth = $h*$r;
				$newheight = $h;
			} else {
				$newheight = $w/$r;
				$newwidth = $w;
			}
		}
		
		if (in_array($file['type'], array('image/jpeg','image/pjpeg'))) {
			$src = imagecreatefromjpeg($file['tmp_name']);
		} else {
			$src = imagecreatefrompng($file['tmp_name']);
		}
		$dst = imagecreatetruecolor($newwidth, $newheight);
		imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

		return $dst;
	}
}