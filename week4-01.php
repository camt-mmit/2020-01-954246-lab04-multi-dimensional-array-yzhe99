<?php
 echo"Input number of student: ";
  $sn=trim(fgets(STDIN));
/*ID: 612110264
Name:   Zhe Yin */
  echo"Input the number of chapter: ";
  $cn=trim(fgets(STDIN));

  $format="%s";
  $students = [];
  
  for($j = 0; $j < $cn; $j++)
  {
    $format .="%f";
  }
  $format=trim($format);
  
  for($i = 0; $i < $sn; $i++)
  {
  $students[$i]= [];
  
  
  printf("\nStudent %d score stdname ",$i+1);
    for($j = 0; $j < $cn; $j++)
    {
    printf("(chapter %d ",$j+1);
    }
    echo");";
    
  $students[$i] = fscanf(STDIN,trim($format));
  }

  for($i = 0; $i < count($students); $i++)
  {
    printf("%s : ",$students[$i][0]);
    $total = 0;
    for($j = 1; $j < $cn+1; $j++)
    {
    printf("%.2f ",$students[$i][$j]);
    $total +=$students[$i][$j];
    }
    printf(" %.2f\n ",$total);
  }
