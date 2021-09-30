Micro Photo Gallery

Version: 1.0
Date: 2007-04-05

Usage:
Just copy the index.php file into your image folder.

Attention: 
As index.php file creates thumbnail images which can take a long time so it can happen
that the script will be timed out. 
An other issue is that if you have big image files than PHP requires a lot of memory
to resize it. The default PHP setting is 8M which is not enough for images more than
~400-500kb.

If you have such problems you can create the thumbnail images offline and upload it 
to your image directory. You only need to use a file name convention as follows:

Original image : myphoto.jpg
Thumbnail image: myphoto_th.jpg

So all of your thumbnail images must have the '_th' addition in the name and must
be a jpg extension and not jpeg.

If the script can find the thumbnail images than all resize process will be skipped 
so you have no problem.