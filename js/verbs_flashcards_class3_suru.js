﻿// variables
var kanjiA = new Array();
var furiganaA = new Array();
var englishA = new Array();
var numFlashcards;
var map = new Array ();
var mapIndex;

var stemA = new Array
('し','し','さ','さ','さ',
'し','し','し','し','し','し',
'す',
'* でき','* す','* し',
'* し',
'し','し','し');
var aiueoA = new Array
('','','','','',
'','','','','','',
'',
'','','',
'',
'','','');
var conjugationA = new Array
('ない','なければ','れる','せる','せられる',
'ます','ません','ましょう','なさい','たい','',
'る',
'る','れば','ろ',
'よう',
'て','た','たら');

// functions
function init2() {
	for (i=0; i<numFlashcards; i++)
		{
		map[i] = i;
		}
	document.f.kanji.value = "";
	document.f.furigana.value = "";
	document.f.english.value = "";
	mapIndex = -1;
	scramble();
	nextKanji();
	}

function clearAll() {
	for (i=0; i<aiueoA.length; i++)
		{
		document.f.stem[i].value = "";
		document.f.aiueo[i].value = "";
		document.f.conjugation[i].value = "";
		document.f.checkbox[i].checked = false;
		}
	}

function setVerb(i) {
	if (eval('document.f.checkbox['+i+'].checked') == true)
		{
		document.f.stem[i].value = stemA[i];
		setTimeout('document.f.aiueo['+i+'].value = aiueoA['+i+']', 300);
		setTimeout('document.f.conjugation['+i+'].value = conjugationA['+i+']', 600);
		}
	else
		{
		document.f.stem[i].value = "";
		document.f.aiueo[i].value = ""
		document.f.conjugation[i].value = "";
		}
	}

function setAll() {
	for (i=0; i<aiueoA.length; i++)
		{
		document.f.stem[i].value = stemA[i];
		document.f.aiueo[i].value = aiueoA[i];
		document.f.conjugation[i].value = conjugationA[i];
		document.f.checkbox[i].checked = true;
		}
	}










function nextKanji() {
	if (mapIndex < numFlashcards-1)
		{
		mapIndex++;
		document.f.kanji.value = kanjiA[map[mapIndex]];
		document.f.furigana.value = "";
		document.f.english.value = "";
		if (eval("document.f.displayF.checked") == true)
			{
			setTimeout('showFurigana()', document.f.delay.value*1000);
			}
		else if (eval("document.f.displayE.checked") == true)
			{setTimeout('showEnglish()', document.f.delay.value*1000);}
		}
	else
		{
		done();
		}
	}

function previousKanji() {
	if (mapIndex > 0)
		{
		mapIndex--;
		document.f.kanji.value = kanjiA[map[mapIndex]];
		document.f.furigana.value = "";
		document.f.english.value = "";
		if (eval("document.f.displayF.checked") == true)
			{
			setTimeout('showFurigana()', document.f.delay.value*1000);
			}
		else if (eval("document.f.displayE.checked") == true)
			{setTimeout('showEnglish()', document.f.delay.value*1000);}
		}
	else
		{
		done();
		}
	}

function showFurigana() {
	document.f.furigana.value = furiganaA[map[mapIndex]];
	if (eval("document.f.displayE.checked") == true)
		{setTimeout('showEnglish()', document.f.delay.value*1000);}
	}

function showEnglish() {
	document.f.english.value = englishA[map[mapIndex]];
	}

function done() {
	alert('Click START for a new game.');
	}

function scramble() {
	for (z = 0; z < 5; z++) {
		for (x = 0; x < numFlashcards; x++) {
			randomI = Math.floor(Math.random()*3);
			randomVal = map[randomI];
			savedVal = map[x];
			map[x] = randomVal;
			map[randomI] = savedVal;
			}
		}
	}
