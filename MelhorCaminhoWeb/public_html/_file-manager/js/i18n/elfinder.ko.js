/**
 * Korean translation
 * @author Hwang Ahreum 황아름 <luckmagic@naver.com>
 * @version 2012-06-27
 */
if (elFinder && elFinder.prototype && typeof(elFinder.prototype.i18) == 'object') {
	elFinder.prototype.i18.ko = {
		translator : 'Hwang Ahreum; &lt;luckmagic@naver.com&gt;',
		language   : 'Korea-한국어',
		direction  : 'ltr',
		dateFormat : 'd.m.Y H:i',
		fancyDateFormat : '$1 H:i',
		messages   : {

			/********************************** errors **********************************/
			'error'                : '에러',
			'errUnknown'           : '알 수 없는 에러',
			'errUnknownCmd'        : '알 수 없는 명령어',
			'errJqui'              : 'jQuery UI 환경설정이 올바르지 않습니다. 선택,드래그앤드롭 컴포넌트가 포함되어야합니다',
			'errNode'              : 'elFinder를 생성하기 위해서는 DOM Element를 요구합니다',
			'errURL'               : 'elFinder 환경설정이 올바르지 않습니다! URL 옵션이 설정되지 않았습니다',
			'errAccess'            : '액세스 할 수 없습니다',
			'errConnect'           : 'Backend에 연결할 수 없습니다',
			'errAbort'             : '연결 실패',
			'errTimeout'           : '연결시간 초과',
			'errNotFound'          : 'Backend를 찾을 수 없습니다',
			'errResponse'          : 'Backend가 응답하지 않습니다',
			'errConf'              : 'Backend 환경설정이 올바르지 않습니다',
			'errJSON'              : 'PHP JSON 모듈이 설치되지 않았습니다',
			'errNoVolumes'         : '읽기 가능한 볼률이 없습니다',
			'errCmdParams'         : ' "$1" 명령어는 잘못된 인수입니다',
			'errDataNotJSON'       : '데이터는 JSON이 아닙니다',
			'errDataEmpty'         : '빈 데이터 입니다',
			'errCmdReq'            : 'Backend는 필요한 명령어 이름을 요청합니다',
			'errOpen'              : ' "$1" 열 수 없습니다',
			'errNotFolder'         : '폴더가 아닙니다',
			'errNotFile'           : '파일이 아닙니다',
			'errRead'              : ' "$1" 읽을 수 없습니다',
			'errWrite'             : ' "$1" 쓸 수 없습니다',
			'errPerm'              : '권한이 없습니다',
			'errLocked'            : ' "$1" 잠겨 있습니다, 이동,삭제가 불가능합니다',
			'errExists'            : ' "$1" 존재합니다',
			'errInvName'           : '이름에 올바르지 않은 문자가 포함되었습니다',
			'errFolderNotFound'    : '폴더를 찾을 수 없습니다',
			'errFileNotFound'      : '파일을 찾을 수 없습니다',
			'errTrgFolderNotFound' : ' "$1" 폴더를 찾을 수 없습니다',
			'errPopup'             : '브라우저에서 팝업을 차단하였습니다.팝업을 허용하려면 브라우저 옵션을 변경하세요',
			'errMkdir'             : ' "$1" 폴더를 생성할 수 없습니다',
			'errMkfile'            : ' "$1" 파일을 생성할 수 없습니다',
			'errRename'            : ' "$1" 이름을 변경할 수 없습니다',
			'errCopyFrom'          : '볼률 "$1" 로부터 파일을 복사할 수 없습니다',
			'errCopyTo'            : '볼률 "$1" 에 파일을 복사할 수 없습니다',
			'errUploadCommon'      : '업로드 에러',
			'errUpload'            : ' "$1" 업로드할 수 없습니다',
			'errUploadNoFiles'     : '업로드할 파일이 없습니다',
			'errMaxSize'           : '데이터가 허용된 최대크기를 초과하였습니다',
			'errFileMaxSize'       : '파일이 허용된 최대크기를 초과하였습니다',
			'errUploadMime'        : '잘못된 파일형식입니다',
			'errUploadTransfer'    : ' "$1" 전송 에러', 
			'errSave'              : ' "$1" 저장할 수 없습니다',
			'errCopy'              : ' "$1" 복사할 수 없습니다',
			'errMove'              : ' "$1" 이동할 수 없습니다',
			'errCopyInItself'      : ' "$1" 이곳에 복사 할 수 없습니다',
			'errRm'                : ' "$1" 이름을 변경할 수 없습니다',
			'errExtract'           : ' "$1" 에 압축을 풀 수 없습니다',
			'errArchive'           : '압축파일을 생성할 수 없습니다',
			'errArcType'           : '지원하지 않는 압축파일 형식입니다',
			'errNoArchive'         : '압축파일이 아니거나 지원하지 않는 압축파일 형식입니다',
			'errCmdNoSupport'      : '이 명령어는 Backend를 지원하지 않습니다',
			'errReplByChild'       : ' "$1" 폴더에 덮어쓸수 없습니다',
			'errArcSymlinks'       : '보안을 위해 시스템 호출을 포함한 압축파일인지를 분석합니다',
			'errArcMaxSize'        : '압축파일이 허용된 최대크기를 초과하였습니다',
			'errResize'            : ' "$1" 크기 변경을 할 수 없습니다',
			'errUsupportType'      : '지원하지 않는 파일 형식',

			/******************************* commands names ********************************/
			'cmdarchive'   : '압축파일생성',
			'cmdback'      : '뒤로',
			'cmdcopy'      : '복사',
			'cmdcut'       : '자르기',
			'cmddownload'  : '다운로드',
			'cmdduplicate' : '사본',
			'cmdedit'      : '편집',
			'cmdextract'   : '압축풀기',
			'cmdforward'   : '앞으로',
			'cmdgetfile'   : '선택',
			'cmdhelp'      : '이 소프트웨어는',
			'cmdhome'      : '홈',
			'cmdinfo'      : '파일정보',
			'cmdmkdir'     : '새 폴더',
			'cmdmkfile'    : '새 텍스트파일',
			'cmdopen'      : '열기',
			'cmdpaste'     : '붙여넣기',
			'cmdquicklook' : '미리보기',
			'cmdreload'    : '새로고침',
			'cmdrename'    : '이름바꾸기',
			'cmdrm'        : '삭제',
			'cmdsearch'    : '파일찾기',
			'cmdup'        : '상위폴더',
			'cmdupload'    : '업로드',
			'cmdview'      : '보기',
			'cmdresize'    : '이미지 사이즈변경',
			'cmdsort'      : '정렬',

			/*********************************** buttons ***********************************/ 
			'btnClose'  : '닫기',
			'btnSave'   : '저장',
			'btnRm'     : '삭제',
			'btnApply'  : '적용',
			'btnCancel' : '취소',
			'btnNo'     : '아니오',
			'btnYes'    : '예',

			/******************************** notifications ********************************/
			'ntfopen'     : '폴더 열기',
			'ntffile'     : '파일 열기',
			'ntfreload'   : '새로고침',
			'ntfmkdir'    : '폴더 생성',
			'ntfmkfile'   : '파일 생성',
			'ntfrm'       : '삭제',
			'ntfcopy'     : '복사',
			'ntfmove'     : '이동',
			'ntfprepare'  : '복사 준비',
			'ntfrename'   : '이름바꾸기',
			'ntfupload'   : '업로드',
			'ntfdownload' : '다운로드',
			'ntfsave'     : '저장하기',
			'ntfarchive'  : '압축파일만들기',
			'ntfextract'  : '압축풀기',
			'ntfsearch'   : '검색',
			'ntfsmth'     : '작업중 >_<',
			'ntfloadimg'  : '이미지 불러오기',

			/************************************ dates **********************************/
			'dateUnknown' : '알수없음',
			'Today'       : '오늘',
			'Yesterday'   : '내일',
			'Jan'         : '1월',
			'Feb'         : '2월',
			'Mar'         : '3월',
			'Apr'         : '4월',
			'May'         : '5월',
			'Jun'         : '6월',
			'Jul'         : '7월',
			'Aug'         : '8월',
			'Sep'         : '9월',
			'Oct'         : '10월',
			'Nov'         : '11월',
			'Dec'         : '12월',
			'January'     : '1월',
			'February'    : '2월',
			'March'       : '3월',
			'April'       : '4월',
			'May'         : '5월',
			'June'        : '6월',
			'July'        : '7월',
			'August'      : '8월',
			'September'   : '9월',
			'October'     : '10월',
			'November'    : '11월',
			'December'    : '12월',
			'Sunday'      : '일요일', 
			'Monday'      : '월요일', 
			'Tuesday'     : '화요일', 
			'Wednesday'   : '수요일', 
			'Thursday'    : '목요일', 
			'Friday'      : '금요일', 
			'Saturday'    : '토요일',
			'Sun'         : '일', 
			'Mon'         : '월', 
			'Tue'         : '화', 
			'Wed'         : '수', 
			'Thu'         : '목', 
			'Fri'         : '금', 
			'Sat'         : '토',
			/******************************** sort variants ********************************/
			'sortnameDirsFirst' : '이름 (폴더 먼저)', 
			'sortkindDirsFirst' : '종류 (폴더 먼저)', 
			'sortsizeDirsFirst' : '크기 (폴더 먼저)', 
			'sortdateDirsFirst' : '날짜 (폴더 먼저)', 
			'sortname'          : '이름', 
			'sortkind'          : '종류', 
			'sortsize'          : '크기',
			'sortdate'          : '날짜',

			/********************************** messages **********************************/
			'confirmReq'      : '확인',
			'confirmRm'       : '이 파일을 정말 삭제 하겠습니까?<br/>실행 후 되돌릴 수 없습니다!',
			'confirmRepl'     : '파일을 덮어쓰겠습니까?',
			'apllyAll'        : '모두 적용',
			'name'            : '이름',
			'size'            : '크기',
			'perms'           : '권한',
			'modify'          : '수정된 시간',
			'kind'            : '종류',
			'read'            : '읽기',
			'write'           : '쓰기',
			'noaccess'        : '액세스 불가',
			'and'             : '와',
			'unknown'         : '알 수 없음',
			'selectall'       : '모든 파일 선택',
			'selectfiles'     : '파일 선택',
			'selectffile'     : '첫번째 파일 선택',
			'selectlfile'     : '마지막 파일 선택',
			'viewlist'        : '리스트 보기',
			'viewicons'       : '아이콘 보기',
			'places'          : '위치',
			'calc'            : '계산', 
			'path'            : '경로',
			'aliasfor'        : '별명',
			'locked'          : '잠금',
			'dim'             : '크기',
			'files'           : '파일',
			'folders'         : '폴더',
			'items'           : '아이템',
			'yes'             : '예',
			'no'              : '아니오',
			'link'            : '링크',
			'searcresult'     : '검색 결과',  
			'selected'        : '아이템 선택',
			'about'           : 'About',
			'shortcuts'       : '단축아이콘',
			'help'            : '도움말',
			'webfm'           : '웹 파일매니저',
			'ver'             : '버전',
			'protocol'        : '프로토콜 버전',
			'homepage'        : '홈페이지',
			'docs'            : '문서',
			'github'          : 'Fork us on Github',
			'twitter'         : '트위터따라가기',
			'facebook'        : '페이스북 가입하기',
			'team'            : '팀',
			'chiefdev'        : '개발팀장',
			'developer'       : '개발자',
			'contributor'     : '공헌자',
			'maintainer'      : '관리자',
			'translator'      : '번역',
			'icons'           : '아이콘',
			'dontforget'      : 'and don\'t forget to take your towel',
			'shortcutsof'     : '단축아이콘 사용불가',
			'dropFiles'       : '여기로 이동하기',
			'or'              : '또는',
			'selectForUpload' : '업로드 파일 선택',
			'moveFiles'       : '파일 이동',
			'copyFiles'       : '파일 복사',
			'rmFromPlaces'    : '현재 폴더에서 삭제하기',
			'untitled folder' : '새 폴더',
			'untitled file.txt' : '새 텍스트.txt',
			'aspectRatio'     : '화면비율',
			'scale'           : '크기',
			'width'           : '가로',
			'height'          : '세로',
			'mode'            : '모드',
			'resize'          : '사이즈 변경',
			'crop'            : '자르기',
			'rotate'          : '회전',
			'rotate-cw'       : '반시계방향 90도 회전',
			'rotate-ccw'      : '시계방향 90도 회전',
			'degree'          : '각도',

			/********************************** mimetypes **********************************/
			'kindUnknown'     : '알수없음',
			'kindFolder'      : '폴더',
			'kindAlias'       : 'Alias',
			'kindAliasBroken' : '손상된 Alias',
			// applications
			'kindApp'         : '응용프로그램',
			'kindPostscript'  : 'Postscript 문서',
			'kindMsOffice'    : 'Microsoft Office 문서',
			'kindMsWord'      : 'Microsoft Word 문서',
			'kindMsExcel'     : 'Microsoft Excel 문서',
			'kindMsPP'        : 'Microsoft Powerpoint',
			'kindOO'          : 'Office 문서 열기',
			'kindAppFlash'    : '플래쉬',
			'kindPDF'         : 'PDF(PDF)',
			'kindTorrent'     : 'Bittorrent 파일',
			'kind7z'          : '7z 압축파일',
			'kindTAR'         : 'TAR 압축파일',
			'kindGZIP'        : 'GZIP 압축파일',
			'kindBZIP'        : 'BZIP 압축파일',
			'kindZIP'         : 'ZIP 압축파일',
			'kindRAR'         : 'RAR 압축파일',
			'kindJAR'         : 'Java JAR 파일',
			'kindTTF'         : '트루타입 글꼴',
			'kindOTF'         : '오픈타입 글꼴',
			'kindRPM'         : 'RPM 패키지',
			// texts
			'kindText'        : 'Text 문서',
			'kindTextPlain'   : '보통 텍스트',
			'kindPHP'         : 'PHP 소스',
			'kindCSS'         : 'CSS 문서',
			'kindHTML'        : 'HTML 문서',
			'kindJS'          : '자바스크립트 소스',
			'kindRTF'         : 'RTF 형식',
			'kindC'           : 'C 소스',
			'kindCHeader'     : 'C 헤더소스',
			'kindCPP'         : 'C++ 소스',
			'kindCPPHeader'   : 'C++ 헤더소스',
			'kindShell'       : 'Unix shell 스크립트',
			'kindPython'      : 'Python 소스',
			'kindJava'        : 'Java 소스',
			'kindRuby'        : 'Ruby 소스',
			'kindPerl'        : 'Perl 스크립트',
			'kindSQL'         : 'SQL 소스',
			'kindXML'         : 'XML 문서',
			'kindAWK'         : 'AWK 소스',
			'kindCSV'         : 'CSV 형식',
			'kindDOCBOOK'     : 'XML 닥북 문서',
			// images
			'kindImage'       : '이미지',
			'kindBMP'         : 'BMP 이미지',
			'kindJPEG'        : 'JPEG 이미지',
			'kindGIF'         : 'GIF 이미지',
			'kindPNG'         : 'PNG 이미지',
			'kindTIFF'        : 'TIFF 이미지',
			'kindTGA'         : 'TGA 이미지',
			'kindPSD'         : 'Adobe Photoshop 이미지',
			'kindXBITMAP'     : 'X bitmap 이미지',
			'kindPXM'         : 'Pixelmator 이미지',
			// media
			'kindAudio'       : '오디오 미디어',
			'kindAudioMPEG'   : 'MPEG 오디오',
			'kindAudioMPEG4'  : 'MPEG-4 오디오',
			'kindAudioMIDI'   : 'MIDI 오디오',
			'kindAudioOGG'    : 'Ogg Vorbis 오디오',
			'kindAudioWAV'    : 'WAV 오디오',
			'AudioPlaylist'   : 'MP3 플레이 리스트',
			'kindVideo'       : 'Video 미디어',
			'kindVideoDV'     : 'DV 동영상',
			'kindVideoMPEG'   : 'MPEG 동영상',
			'kindVideoMPEG4'  : 'MPEG-4 동영상',
			'kindVideoAVI'    : 'AVI 동영상',
			'kindVideoMOV'    : '퀵타임 동영상',
			'kindVideoWM'     : '윈도우 미디어 플레이어 동영상',
			'kindVideoFlash'  : '플래쉬 동영상',
			'kindVideoMKV'    : 'Matroska 동영상',
			'kindVideoOGG'    : 'Ogg 동영상'
		}
	}
}