<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('organization_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('organization_id');
        });
    }
};

// SQL COMMAND ADD FOODBANKS
//'1','Wycombe Food Hub','foodbank','wycombe-food-hub',NULL, NULL,'Unit 26\r\nChilterns Shopping Centre\r\nFrogmoor\r\nHigh Wycombe\r\nHP13 5ES','01494913626','contact@wycombefoodhub.org','http://wycombefoodhub.org','1','0',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'2','One Can Trust (High Wycombe)','foodbank','one-can-trust-high-wycombe',NULL, NULL,'11B Duke Street\r\nHigh Wycombe\r\nBuckinghamshire\r\nHP13 6EE','01494512277','onecan@live.co.uk','https://onecantrust.org.uk','0','1',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'3','Maidenhead','foodbank','maidenhead',NULL, NULL,'Unit 65\r\nThe Nicholsons Centre\r\nKing Street\r\nMaidenhead.\r\nSL6 1LL','01628262711','info@foodshare.today','https://www.foodshare.charity','1','1',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'4','Chiltern','foodbank','chiltern',NULL, NULL,'71 Broadway\r\nChesham\r\nBuckinghamshire\r\nHP5 1BX','01494775668','info@chiltern.foodbank.org.uk','https://chiltern.foodbank.org.uk','0','1',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'5','Slough','foodbank','slough',NULL, NULL,'411 Montrose Avenue\r\nSlough\r\nBerkshire\r\nSL1 4TJ','01753550303','office@slough.foodbank.org.uk','https://slough.foodbank.org.uk','1','0',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'6','Rickmansworth','foodbank','rickmansworth',NULL, NULL,'Methodist Church\r\nBerry Lane\r\nRickmansworth\r\nHertfordshire\r\nWD3 7HJ','07716856892','info@rickmansworth.foodbank.org.uk','https://rickmansworth.foodbank.org.uk','1','0',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'7','Windsor Food Share','foodbank','windsor-food-share',NULL, NULL,'Dedworth Green Baptist Church\r\nSmiths Lane\r\nWindsor\r\nSL4 5PE','07972646613','donations@windsorfoodshare.org.uk','https://www.windsorfoodshare.org.uk','0','1',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'8','Thame','foodbank','thame',NULL, NULL,'Unit D2\r\nStation Yard\r\nThame\r\nOxfordshire\r\nOX9 3UH','01844397400','info@sharinglifetrust.org','https://www.sharinglifetrust.org/foodbank','0','1',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'9','Hillingdon','foodbank','hillingdon',NULL, NULL,'4 New Windsor Street\r\nUxbridge\r\nUB8 2TU','07859710747','hillingdonfoodbank@kingsborough.org.uk','https://hillingdon.foodbank.org.uk','0','1',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
//'10','Aylesbury Vineyard Storehouse','foodbank','aylesbury-vineyard-storehouse',NULL, NULL,'The Vineyard Centre\r\nGatehouse Close\r\nAylesbury\r\nHP19 8DN','01296424440','office@aylesburyvineyard.org','https://aylesburyvineyard.church/storehouse','0','1',NULL,NULL,NULL,NULL,'2024-01-18 19:48:50','2024-01-18 19:48:50',NULL
