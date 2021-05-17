<?php

class Point
{
	public int $x, $y;
	
	public function __construct(int $x, int $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	
	public function __toString(): string
	{
		return "{$this->x}|{$this->y}";
	}
}

/**
 * Solution using php built-in functions
 * @param Point[] $points
 * @return bool
 */
function arePointsUnique(array $points): bool
{
	$uniquePoints = array_unique($points);
	return count($points) === count($uniquePoints);
}

$p1 = new Point(12, 36);
$q1 = new Point(-92, 0);
$r1 = new Point(92, 36);
$set1 = [$p1, $q1, $r1];

$p2 = new Point(12, 36);
$q2 = new Point(-92, 0);
$r2 = new Point(12, 36);
$set2 = [$p2, $q2, $r2];


/**
 * Solution One
 */
$solutionStartTime = microtime(true);
$result1 = arePointsUnique($set1);
$result2 = arePointsUnique($set2);
$solutionTime = microtime(true) - $solutionStartTime;

echo "Set 1 is " . ($result1 ? "" : "not ") . "unique.\n";
echo "Set 2 is " . ($result2 ? "" : "not ") . "unique.\n";
print_r("Solution took: {$solutionTime} seconds");