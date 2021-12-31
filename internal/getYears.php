<?php if (count(get_included_files()) == 1) die("Direct access to this file is not permitted."); ?>

<!-- Temporary API -->
<?php 
	require_once("utils.php");

	function getYears() {
        $sql = "SELECT DISTINCT `Year` FROM `CUR_CourseUnits` ORDER BY `Year` DESC";
		$res = doSQL($sql);

		if ($res[0]) {
			return [200, toArray($res[1])];
		} else {
			return [400];
		}
	}
?>
