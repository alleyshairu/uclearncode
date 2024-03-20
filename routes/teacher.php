<?php

use Illuminate\Support\Facades\Route;
use Uc\Module\Core\TeacherMiddleware;
use Uc\Module\Course\Controller\CourseController;
use Uc\Module\Course\Controller\ChapterController;
use Uc\Module\Student\Controller\StudentController;
use Uc\Module\Language\Controller\LanguageController;

Route::middleware(['auth', TeacherMiddleware::class])->group(function () {
    // students
    Route::get('/students', [StudentController::class, 'index'])->name('student.index');

    // course
    Route::get('/languages', [LanguageController::class, 'index'])->name('language.index');
    Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course.show');

    // chapter
    Route::get('/courses/{id}/chapter-create', [ChapterController::class, 'create'])->name('chapter.create');
    Route::post('/chapter/store', [ChapterController::class, 'store'])->name('chapter.store');
    Route::get('/chapter/{id}', [ChapterController::class, 'show'])->name('chapter.show');
});
