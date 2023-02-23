<?php
SELECT * FROM `spending` WHERE MONTH(`date`) = MONTH(NOW()) AND YEAR(`date`) = YEAR(NOW()) //выборка по времени
