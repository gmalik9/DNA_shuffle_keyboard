<?php

$chr=$_REQUEST['chr'];

$char=array('a','e','o','r','i','s','n','1','t','l','2','m','d','0','c','p','3','h','b','u','k','4','5','g','9','6','8','7','y','f','w','j','v','z','x','q','A','S','E','R','B','T','M','L','N','P','O','I','D','C','H','G','K','F','J','U','W','.','!','Y','*','@','V',' ','Z','Q','X','_','$','#',',','/','+','?',';','^','-','%','~','=','&','`','\\',')',']','[',':','<','(','æ','>','"','ü','|','{',"'",'ö','ä','}','\n','
	','	');

$dna=array('GCTG','CAGC','AAAA','GCGC','GGCG','CTGG','TTTT','CGCC','CCAG','GCCA','TGGC','CTGC','CGGC','GCCG','GCAG','GCGG','CCGC','CGCG','ATCA','GGCA','TGAT','TTTC','GAAA','TTGC','TGCC','GCAA','CATC','AGCG','CGCT','TGAA','GATG','GCGT','ATTT','TCGC','AAAT','TGCG','CGCA','ACGC','GTTT','CGGT','GCGA','TTCA','AAAC','CAGG','CCTG','CGTT','CCGG','ACCG','CTGA','CAAA','CGAT','ACCA','TGGT','AACG','TCAG','ATCG','TTTG','CACC','TGCT','GGTG','AAAG','CTTT','TAAA','TTTA','AGCA','ATAA','TCTG','TTAT','GTTG','TGTT','AATG','AACA','CATT','ATGC','GAAG','TTAA','GCAT','CAAC','AATA','CAGA','GATT','ATTG','CAAT','AATC','TATT','CTTC','ATGA','ACTG','TCAT','CAGT','GGTT','GATA','TTCC','TATC','AACC','ATGG','CCAT','TGCA','GGAA','GCTT','AATT','CGAA');

$protein = array('AA','AC','AD','AE','AF','AG','AH','AI', 'AK', 'AL', 'AM', 'AN', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AV', 'AW', 'AY', 'CA', 'CC', 'CD', 'CE', 'CF', 'CG', 'CH', 'CI', 'CK', 'CL', 'CM', 'CN', 'CP', 'CQ', 'CR', 'CS', 'CT', 'CV', 'CW', 'CY', 'DA', 'DC', 'DD', 'DE', 'DF', 'DG', 'DH', 'DI', 'DK', 'DL', 'DM', 'DN', 'DP', 'DQ', 'DR', 'DS', 'DT', 'DV', 'DW', 'DY', 'EA', 'EC', 'ED', 'EE', 'EF', 'EG', 'EH', 'EI', 'EK', 'EL', 'EM', 'EN', 'EP', 'EQ', 'ER', 'ES', 'ET', 'EV', 'EW', 'EY', 'FA', 'FC', 'FD', 'FE', 'FF', 'FG', 'FH', 'FI', 'FK', 'FL', 'FM', 'FN', 'FP', 'FQ', 'FR', 'FS', 'FT', 'FV','FW','FY','GA','GC');
//if (in_array($chr, $char)) {
	$key=array_search($chr, $char);
	echo $dna[$key].' ';
	echo $protein[$key].' ';
	//return array($dna[$key], $protein[$key]);	
//}
?>