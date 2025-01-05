<?php

function formatSalary($salary) {
  return '$' . number_format(floatVal($salary));
}