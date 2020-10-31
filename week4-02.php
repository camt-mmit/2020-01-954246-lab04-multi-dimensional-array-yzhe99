<?php
/*ID: 612110264
Name:   Zhe Yin */
echo"Input data(floor n): ";
fscanf(STDIN,"%d %d",$f,$n);

$zone=[];
for($i=0;$i<$f;$i++)
{
  printf("Floor:%d\n",$i+1);
  for($j=0;$j<$n;$j++)
  {

    for($k=0;$k<$n;$k++)
    {
      printf("Input numbern of person in zone %d-%d ",$j+1,$k+1);
      $num[$i][$j][$k]=trim(fgets(STDIN));
    }

  }
}



echo"\n Person on each floor";
for($i=0;$i<$f;$i++)
{
  echo"\tFloor: ".($i+1);
  $total=0;
  for($j=0;$j<$n;$j++)
  {
      for($k=0;$k<$n;$k++)
      {
      
        echo"\t";
        echo"{$num[$i][$j][$k]}";
        $total+=$num[$i][$j][$k];
      }
      echo"\n";
  }
  printf("Total=%d",$total);
}
