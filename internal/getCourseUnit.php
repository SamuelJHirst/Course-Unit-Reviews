<?php if (count(get_included_files()) == 1) die("Direct access to this file is not permitted."); ?>

<!-- Temporary API -->
<?php 
	require_once("utils.php");

	function getCourseUnit($CourseUnit, $Year) {
        $sql = "SELECT * FROM `CUR_CourseUnits` WHERE `Code` = '$CourseUnit' AND `Year` = $Year";
		$res = doSQL($sql);

		if ($res[0]) {
			return [200, toArray($res[1])];
		} else {
			return [400];
		}
	}
?>
