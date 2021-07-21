<?php 
function get_members(){
	return ['egoing', 'k8805', 'sorialgi']; 
}

$members = get_members();

for ($i=0; $i < count($members); $i++) { #count함수 count($members) = 3
	echo ucfirst($members[$i]).'<br>';  #ucfirst = 배열의 첫번째 글자가 대문자로 표시 (Egoing, K8805, Sorialgi)
}
?>